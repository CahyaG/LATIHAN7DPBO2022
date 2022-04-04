<?php

class Task extends DB
{

	// Get data.
	function getTask()
	{
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";
		// Mengeksekusi query
		return $this->execute($query);
	}

	// Add data.
	function addTask()
	{
		$name = $_POST['tname'];
		$deadline = $_POST['tdeadline'];
		$detail = $_POST['tdetails'];
		$subject = $_POST['tsubject'];
		$priority = $_POST['tpriority'];
		$query = "INSERT INTO tb_to_do (name_td, details_td, subject_td,
					priority_td, deadline_td, status_td) VALUES ('$name',
					'$detail', '$subject', '$priority', '$deadline', 'Belum')";

		return $this->execute($query);
	}

	// Update task Status dari "Belum" ke "Sudah".
	function updateTaskStatus($id)
	{
		$query = "UPDATE tb_to_do SET status_td = 'Sudah' WHERE id = '$id'";
		return $this->execute($query);
	}

	// Delete data.
	function deleteTask($id)
	{
		$query = "DELETE FROM tb_to_do WHERE id = '$id'";
		return $this->execute($query);
	}

	// mengurutkan data secara ascending berdasarkan kolom yang dipilih
	function sortTask($column)
	{
		$query = "SELECT * FROM tb_to_do ORDER BY $column ASC";
		return $this->execute($query);
	}
}