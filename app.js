document.addEventListener("DOMContentLoaded", () => {
  const taskForm = document.getElementById("task-form");
  const taskInput = document.getElementById("task-input");
  const taskList = document.getElementById("task-list");
  const editModal = document.getElementById("edit-modal");
  const editTaskForm = document.getElementById("edit-task-form");
  const editTaskInput = document.getElementById("edit-task-input");
  const editTaskId = document.getElementById("edit-task-id");
  const closeModalBtn = document.querySelector(".close-modal");

  // Cargar tareas al iniciar
  loadTasks();

  // Añadir nueva tarea
  taskForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const taskName = taskInput.value.trim();
    if (taskName) {
      addTask(taskName);
      taskInput.value = "";
    }
  });

  // Cerrar modal de edición
  closeModalBtn.addEventListener("click", () => {
    editModal.style.display = "none";
  });

  // Editar tarea
  editTaskForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const taskId = editTaskId.value;
    const newTaskName = editTaskInput.value.trim();

    if (newTaskName) {
      updateTask(taskId, newTaskName);
      editModal.style.display = "none";
    }
  });

  // Función para cargar tareas
  function loadTasks() {
    fetch("get_tasks.php")
      .then((response) => response.json())
      .then((tasks) => {
        taskList.innerHTML = "";
        tasks.forEach((task) => {
          renderTask(task);
        });
      })
      .catch((error) => console.error("Error:", error));
  }

  // Función para añadir tarea
  function addTask(taskName) {
    fetch("add_task.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: `task=${encodeURIComponent(taskName)}`,
    })
      .then((response) => response.json())
      .then((task) => {
        renderTask(task);
      })
      .catch((error) => console.error("Error:", error));
  }

  // Función para renderizar tarea
  function renderTask(task) {
    const taskItem = document.createElement("div");
    taskItem.classList.add("task-item");
    taskItem.innerHTML = `
            <span class="task-text ${task.completed ? "task-completed" : ""}" 
                  data-id="${task.id}">${task.name}</span>
            <div class="task-actions">
                <button onclick="toggleTaskStatus(${task.id}, ${
      task.completed
    })">
                    ${task.completed ? "❌" : "✓"}
                </button>
                <button onclick="openEditModal(${task.id}, '${
      task.name
    }')">✏️</button>
                <button onclick="deleteTask(${task.id})">🗑️</button>
            </div>
        `;
    taskList.appendChild(taskItem);
  }

  // Función para abrir modal de edición
  window.openEditModal = (taskId, taskName) => {
    editTaskId.value = taskId;
    editTaskInput.value = taskName;
    editModal.style.display = "block";
  };

  // Función para cambiar estado de tarea
  window.toggleTaskStatus = (taskId, currentStatus) => {
    fetch("update_task_status.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: `id=${taskId}&completed=${currentStatus ? 0 : 1}`,
    })
      .then((response) => response.json())
      .then((updatedTask) => {
        const taskText = document.querySelector(
          `.task-text[data-id="${taskId}"]`
        );
        taskText.classList.toggle("task-completed");
        const toggleButton =
          taskText.nextElementSibling.querySelector("button");
        toggleButton.textContent = updatedTask.completed ? "❌" : "✓";
      })
      .catch((error) => console.error("Error:", error));
  };

  // Función para eliminar tarea
  window.deleteTask = (taskId) => {
    fetch("delete_task.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: `id=${taskId}`,
    })
      .then((response) => {
        if (response.ok) {
          const taskElement = document
            .querySelector(`.task-text[data-id="${taskId}"]`)
            .closest(".task-item");
          taskElement.remove();
        }
      })
      .catch((error) => console.error("Error:", error));
  };
});
