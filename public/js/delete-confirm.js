function deleteConfirm(student){
    if(confirm("Xóa sinh viên mã số " + student + "? Kết quả của sinh viên cũng sẽ bị xóa") == true){
        location.href = "/Student/delete/" + student;
    }
}