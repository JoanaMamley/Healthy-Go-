const onDelete = (e) => {
    if (!confirm('Are you sure to remove this record ?')){
        e.preventDefault();
    }
}