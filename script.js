// JavaScript Document

let ourForm = document.getElementById('taskForm');
let ourInput = document.getElementById('taskInput');

let ourList = document.getElementById('taskList');


ourForm.addEventListener('submit', (e)=>{
	e.preventDefault();
	createMyTaskList(ourInput.value);
} )

function createMyTaskList(x){
	let newValue = `<li>${x} <button onclick="deleteMyTaskList(this)">Delete</button></li> `
	ourList.insertAdjacentHTML('beforeend', newValue);
	ourInput.value = " ";
	ourInput.focus();
}

function deleteMyTaskList(taskToDelete){
	taskToDelete.parentElement.remove();
}