<form action="v3/plus" method="post">
    <?php echo method_field('POST'); ?>
    <?php echo csrf_field(); ?>
    <input name='a' type='text'>
    +
    <input name='b' type='text'>
    <input type='submit' value="submit">
</form><br/>

<h1>Logging to Multiple Files Differentiated by Levels</h1>
user:<select id='userSelect'>
    <option value='peter' selected = "selected" >peter</option>
    <option value='alice'>alice</option>
    <option value='jane'>jane</option>
</select><br/>

level:<select id='userLogLevel'>
    <option value='debug' selected = "selected" >debug</option>
    <option value='info'>info</option>
    <option value='warning'>warning</option>
</select>

<div id="userLog">
    <form action='v3/peter/debug/append' method='post'>
        <?php echo method_field('POST'); ?>
        <?php echo csrf_field(); ?>
        <input ivalue="append" type="submit" value="add"> 
    </form>


    <form action='v3/peter/debug/refresh' method='post'>
        <?php echo method_field('POST'); ?>
        <?php echo csrf_field(); ?>
        <input ivalue="refresh" type="submit" value='delete'>
    </form>
</div>

<script type="text/javascript">
 window.onload = function(){
    document.getElementById('userSelect').onclick=function (){
        freshForm();
    }

    document.getElementById('userLogLevel').onclick=function (){
        freshForm();
    }

    function freshForm () {
        var forms = document.getElementById('userLog').getElementsByTagName('form');
        var user = document.getElementById('userSelect').value;
        var level =  document.getElementById('userLogLevel').value
        forms[0].action = 'v3/'+user +'/'+ level +'/append';
        forms[1].action = 'v3/'+user +'/'+ level +'/refresh';
    }
}
</script>

