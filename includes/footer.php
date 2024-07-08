<div style = "background-color: #eee; font-family: sans-serif;  padding: 40px; font-size: 14px; ">@ 2019 Объединение "РобоМир" МБУДО "Дом детского творчества" Заинского МР РТ
</div>
<!--Окно загрузки_разметка-->
<!--задний фон-->
<div class = 'loading-wrap' onclick="wait('none')" id="wait-back"></div>
<!-- Всплывающее окно-->
<div class = 'loading-window' id="wait">
<img  style = "height: 100px; width: 100px;" src = "../load.gif">
<div class = "textload"><b>Пожалуйста, ожидайте. Мы загружаемся</b></div>
</div>

<!--Окно-->
<!--задний фон-->
<div class = "wrap2" onclick="sho('none')" id="wra"></div>
<!-- Всплывающее окно-->
<div class = "window2" id="windo" style = "text-align: center">
	<h3 class = "window-zag">Бронирование BOXов стойки</h3>
	<hr></hr>
<table class="form_sty">
	<div class = "pole-tit"><h5>Выберите расположение</h5></div>
<td>
<tr><button onclick = "wait('block', 'add.php?stoika=1')" class = "succesfull_btn_back "name="add" type="submit">Забронировать BOX 1</button></tr>
</td>
<td>
<tr><button onclick = "wait('block', 'add.php?stoika=2')" class = "succesfull_btn_back "name="add" type="submit">Забронировать BOX 2</button></tr>
</td>
<td>
<tr><button onclick = "wait('block', 'add.php?stoika=3')" class = "succesfull_btn_back "name="add" type="submit">Забронировать BOX 3</button></tr>
</td>
<td>
<tr><button onclick = "wait('block', 'add.php?stoika=4')" class = "succesfull_btn_back "name="add" type="submit">Забронировать BOX 4</button></tr>
</td>
<td>
<tr><button onclick = "wait('block', 'add.php?stoika=5')" class = "succesfull_btn_back "name="add" type="submit">Забронировать BOX 5</button></tr>
</td>
<td>
<tr><button onclick = "wait('block', 'add.php?stoika=6')" class = "succesfull_btn_back "name="add" type="submit">Забронировать BOX 6</button></tr>
</td>
</table>
</div>
<!--Функция открытия окна loading-->
<script>
function wait(state, redir)
{
document.getElementById('wait-back').style.display = state;
document.getElementById('wait').style.display = state;
window.location.href = redir;
}
<!--Скрипт окна-->
</script>
<script>
function sho(state)
{
document.getElementById('windo').style.display = state;
document.getElementById('wra').style.display = state;
}
</script>

</body>
</html>