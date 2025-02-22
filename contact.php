<script>
function validateForm() {
    var name = document.getElementById("name").value;
    var message = document.getElementById("message").value;

    if (name === "" || message === "") {
        alert("名字和留言内容不能为空！");
        return false; // 阻止表单提交
    }
    return true; // 允许表单提交
}
</script>