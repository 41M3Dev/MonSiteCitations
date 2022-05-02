function modeDark() {
var element = document.body;
element.classList.toggle("dark");
}            
<script>
    function modeDark() {
        var element = document.html;
        element.classList.toggle("dark");
}
</script>
<label>
                    <input  type="checkbox" onclick="modeDark()" />
                    <i></i> 
                  </label>