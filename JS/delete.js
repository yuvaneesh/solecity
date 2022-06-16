function deleteConfirm(id){
    const response = confirm(`Are you sure you want to delete #${id}?`);

    if (response){
        document.location.href = "DBDeleteRecord.php?id=" + id;
    }
}