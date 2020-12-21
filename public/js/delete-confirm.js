function studentDeleteConfirm(student){
    if(confirm(`Xóa sinh viên mã số ${student}? Kết quả của sinh viên này cũng sẽ bị xóa!`)){
        location.href = `/Student/delete/${student}`;
    }
}

function resultDeleteConfirm(studentID, subjectID, year, semester){
    if(confirm(`Xóa kết quả môn học ${subjectID}?`) == true ){
        location.href = `/Result/delete/${studentID}/${subjectID}/${year}/${semester}`;
    }
}