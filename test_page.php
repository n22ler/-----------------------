<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Опрос</title>
    <style>
       *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    overflow:visible;
}
.active{
    display: block !important;
}
.elem {
    overflow: auto;
    -ms-overflow-style: none;
    scrollbar-width: none;
}

::-webkit-scrollbar { /* Webkit */
    width      : 0;  /* ширина scrollbar'a */
    background : transparent  /* опционально */
}
button{
    padding: 10px;
    cursor: pointer;
    background: white;
    border: 1px solid lightgray;
    border-radius: 10px;
}
button:hover{
    transition: 0.5s;
    background: #005eb8;
    border: 1px solid #005eb8;
    border-radius: 10px;
    color: white;
}
html {
    -ms-overflow-style : none;  /* IE 10+ */
    scrollbar-width    : none /* Firefox */
}
.btn_group{
    text-align: center;
    margin-top: 25px;
}
.date{
    text-align: center;
    margin-top: 25px;
}

.first{
    margin: auto;
    max-width: 800px;
    padding: 25px;
    display:none;
    flex-direction: column;
}
h1{
    text-align: center;
    margin-top: 15px;
}
.first>h1{
    font-size: 24px;
    margin-bottom:  15px;
    text-align: center;
}
.question{
    margin-top: 15px;
}

.first>ul{
    margin: 20px 0;
}

.first>ul>li{
    max-width: 800px;
    padding-left: 15px;
    padding-right: 15px;
    margin-top: 5px;
    list-style-type:none ;
    text-indent: -0.7em;
}
.question>input{
    margin-bottom: 10px;
    margin-top: 5px;
    max-width: 250px;
    width: 100%;
    height: 25px;
}
.question>div{
    max-width: 800px;
    width: 100%;
    display: flex;
    flex-direction: column;
    margin-top: 20px;
    position: relative;
}
input{
    margin-top: 5px;
    height: 35px;
    padding: 5px;
}
input:hover{
    border: 2px solid #005eb8;
    border-radius: 10px;
    transition: 0.3s;
}
input:disabled{
    border: 1px solid  lightgray;
}
input:disabled:hover{
    border: 1px solid lightgray;
    border-radius: 0;
}
input:focus-visible{
    outline: none;
    border: 2px solid #005eb8;
    border-radius: 10px;
}
.question>div>p{
    opacity: 0;
    padding: 10px;
    border: 1px solid black;
    position: absolute;
    background: white;
    right: 0;
    border-radius: 5px;
    bottom: 0;
}
input:hover ~ p{
    opacity: 1;
    transition:0.5s;
    display: block;
}
.second{
    margin: auto;
    max-width: 800px;
    padding: 25px;
    display: none;
    flex-direction: column;
}
.second>h1{
    font-size: 24px;
    margin-bottom:  15px;
    text-align: center;
}
h3{
    margin-bottom: 15px;
    max-width: 800px;
    cursor: pointer;
    display: flex;
}
h4{
    font-size: 18px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
    margin-left: 10px;
    margin-bottom: 10px;
}
.answer>input{
    width: 100%;
}
.answer{
    margin-bottom: 10px;
}

.second>.question>.block{
display: none;
}
.block{
    display: none;
    margin-left: 10px;
}

.slide-right {
	-webkit-animation: slide-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
	        animation: slide-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}
 @-webkit-keyframes slide-right {
    0% {
      -webkit-transform: translateX(-100px);
              transform: translateX(-100px);
    }
    100% {
      -webkit-transform: translateX(0);
              transform: translateX(0);
    }
  }
@keyframes slide-right {
    0% {
      -webkit-transform: translateX(-100px);
              transform: translateX(-100px);
    }
    100% {
      -webkit-transform: translateX(0);
              transform: translateX(0);
    }
  }
  
.save_btn{
    margin-top: 15px;
}
svg{
    transition: 0.5s;
    align-content: flex-end;
    align-self: center;
    fill:#005eb8
}
.rotate{
    transition: 0.5s;
    transform: rotate(-135deg);
    fill: lightcoral;
}
    </style>
</head>
<body>
    <section class="main">
        <h1>Опрос по теме "Цифровизация"</h1>
        <div class="date">
            <label for="date">Отчет на дату</label>
            <input type="date" name="date" id="">
        </div>
        <div class="btn_group">
            <button id="second">Программа</button>
        </div>
        <section id="first_b" class="first">
            <h1>Сводные данные о достижении целевого значения КПЭ «Доля руководителей, специалистов и служащих, обладающих знаниями в области цифровой трансформации» в 2022 году</h1>
            <p>Необходимо заполнить данные по обученным на программах (лист "Программы")</p>	
            <ul>"На текущем листе (""Общие данные"") заполняются следующие поля:
                <li> - наименование организации;</li>
                <li>- численность руководителей, специалистов и служащих, прошедших обучение в области цифровой трансформации и/или цифровизации в 2020 - 2021 гг.;</li>
                <li>- списочная численность РСС в 2022 году"</li>
            </ul>		
            <p>
                Подсчет значений в закрашенных ячейках ведется автоматически<br>		
                Для поля "Достижение КПЭ цифровой трансформации" целевое значение в 2022 году составляет 8%		
            </p>
            <div class="question">
                <div class="">
                    <label for="org_name">Наименование организации</label>
                    <input type="text" name="org_name">
                </div>
                <div class="">
                    <label for="one"> Численность руководителей, специалистов и служащих (РСС), прошедших обучение в области цифровой трансформации и/или цифровизации в 2020 - 2021 гг. (человек)</label>
                    <input type="text" name="one">
                    <p>Заполняется при наличии информации за предыдущие годы</p>
                </div>
                <div class="">
                    <label for="two"> Списочная численность РСС в 2022 году (человек)</label>
                    <input type="text" name="two">
                    <p>На 30 сентября 2022 года</p>
                </div>
                <div class="">
                    <label for="three"> Прогнозная численность РСС, прошедших обучение в области цифровой трансформации и/или цифровизации в 2022 году (человек)</label>
                    <input disabled type="text" name="three">
                    <p>Заполняется автоматически на основе данных вкладки 'Программы'</p>
                </div>
                <div class="">
                    <label for="four"> Численность РСС, прошедших обучение в области цифровой трансформации и/или цифровизации и продолжающих работать в 2022 году из расчета на 1000 работников (человек)</label>
                    <input disabled type="text" name="four">
                    <p>Рассчитывается автоматически</p>
                </div>
                <div class="">
                    <label for="five"> Достижение КПЭ цифровой трансформации (%)</label>
                    <input disabled type="text" name="five">
                    <p>Рассчитывается автоматически</p>
                </div>
                <button class="save_btn" id="save_programm">Сохранить</button>
            </div>
        </section>
        <section id="second_b" class="second">
            <h1>Численность руководителей, специалистов и служащих (РСС), прошедших обучение в области цифровой трансформации и/или цифровизации в 2022 году</h1>
                <div class="question">
                    <h3 id="block_1">I. Массовое обучение (развитие компетенции "Цифровая грамотность на уровне знания") <svg width="40px" height="40px" viewBox="0 0 24 24" id="svg_b1" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 10.5H7C6.17157 10.5 5.5 11.1716 5.5 12C5.5 12.8284 6.17157 13.5 7 13.5H10.5V17C10.5 17.8284 11.1716 18.5 12 18.5C12.8284 18.5 13.5 17.8284 13.5 17V13.5H17C17.8284 13.5 18.5 12.8284 18.5 12C18.5 11.1716 17.8284 10.5 17 10.5H13.5V7C13.5 6.17157 12.8284 5.5 12 5.5C11.1716 5.5 10.5 6.17157 10.5 7V10.5ZM24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12Z"/></svg></h3>
                    <div id="block_1a" class="block">
                        <label for="one">1. Современные цифровые технологии ("Газпром корпоративный институт")</label>
                        <div class="answer">
                            <input placeholder="Фактическая численность прошедших обучение на 30 сентября 2022 г." type="text" name="one">
                            <input placeholder="Плановая численность обученных в 4-м квартале 2022 г." type="text" name="one">
                        </div>
                        <label for="two">2. Электронные курсы по тематикам в области цифровой трансформации в рамках электронного обучения неограниченного доступа ("Газпром корпоративный институт")</label>
                        <div class="answer">
                            <input placeholder="Фактическая численность прошедших обучение на 30 сентября 2022 г." type="text" name="two">
                            <input placeholder="Плановая численность обученных в 4-м квартале 2022 г." type="text" name="two">
                        </div>
                        <label for="three">3. Цифроград ("Газпром корпоративный институт")</label>
                        <div class="answer">
                            <input placeholder="Фактическая численность прошедших обучение на 30 сентября 2022 г." type="text" name="three">
                            <input placeholder="Плановая численность обученных в 4-м квартале 2022 г." type="text" name="three">
                        </div>
                    </div>
                    <h3 id="block_2">Программы повышения квалификации по сквозным цифровым технологиям и методам управления проектами цифровизации <svg width="40px" height="40px" viewBox="0 0 24 24" id="svg_b2" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 10.5H7C6.17157 10.5 5.5 11.1716 5.5 12C5.5 12.8284 6.17157 13.5 7 13.5H10.5V17C10.5 17.8284 11.1716 18.5 12 18.5C12.8284 18.5 13.5 17.8284 13.5 17V13.5H17C17.8284 13.5 18.5 12.8284 18.5 12C18.5 11.1716 17.8284 10.5 17 10.5H13.5V7C13.5 6.17157 12.8284 5.5 12 5.5C11.1716 5.5 10.5 6.17157 10.5 7V10.5ZM24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12Z"/></svg></h3>
                    <div id="block_2a" class="block">
                        <label for="one">1. Технологии информационного моделирования в области промышленного и гражданского строительства ("Газпром корпоративный институт")</label>
                        <div class="answer">
                            <input placeholder="Фактическая численность прошедших обучение на 30 сентября 2022 г." type="text" name="one">
                            <input placeholder="Плановая численность обученных в 4-м квартале 2022 г." type="text" name="one">
                        </div>
                        <label for="two">2. Анализ и визуализация данных на базе платформ бизнес-аналитики ("Газпром корпоративный институт")</label>
                        <div class="answer">
                            <input placeholder="Фактическая численность прошедших обучение на 30 сентября 2022 г." type="text" name="two">
                            <input placeholder="Плановая численность обученных в 4-м квартале 2022 г." type="text" name="two">
                        </div>
                    </div>
                    <h3 id="block_3">II. Обучение для отдельных категорий работников (развитие компетенции "Цифровая грамотность" на уровне опыта и выше) <svg width="40px" height="40px" viewBox="0 0 24 24" id="svg_b3" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 10.5H7C6.17157 10.5 5.5 11.1716 5.5 12C5.5 12.8284 6.17157 13.5 7 13.5H10.5V17C10.5 17.8284 11.1716 18.5 12 18.5C12.8284 18.5 13.5 17.8284 13.5 17V13.5H17C17.8284 13.5 18.5 12.8284 18.5 12C18.5 11.1716 17.8284 10.5 17 10.5H13.5V7C13.5 6.17157 12.8284 5.5 12 5.5C11.1716 5.5 10.5 6.17157 10.5 7V10.5ZM24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12Z"/></svg></h3>
                    <div id="block_3a" class="block">
                        <h4 id="block_3.1">Руководители   </h4>
                        <div class="block" id="block_3.1a">
                            <label for="one">1.Обеспечение лидерства в управлении изменениями в ходе цифровой трансформации ("Газпром корпоративный институт")</label>
                            <div class="answer">
                                <input placeholder="Фактическая численность прошедших обучение на 30 сентября 2022 г." type="text" name="one">
                                <input placeholder="Плановая численность обученных в 4-м квартале 2022 г." type="text" name="one">
                            </div>
                            <label for="two">2. Цифровая трансформация для руководителей по управлению персоналом (АНО ВО "Университет Иннополис")</label>
                            <div class="answer">
                                <input placeholder="Фактическая численность прошедших обучение на 30 сентября 2022 г." type="text" name="two">
                                <input placeholder="Плановая численность обученных в 4-м квартале 2022 г." type="text" name="two">
                            </div>
                            <label for="three">3. Принципы управления изменениями в цифровой трансформации (АНО ВО "Университет Иннополис")</label>
                            <div class="answer">
                                <input placeholder="Фактическая численность прошедших обучение на 30 сентября 2022 г." type="text" name="three">
                                <input placeholder="Плановая численность обученных в 4-м квартале 2022 г." type="text" name="three">
                            </div>
                        </div>
                        <h4 id="block_3.2">Работники всех подразделений </h4>
                        <div class="block" id="block_3.2a">
                            <label for="one">1. Цифровая трансформация нефтегазовой организации как инструмент повышения эффективности ("Газпром корпоративный институт")</label>
                            <div class="answer">
                                <input placeholder="Фактическая численность прошедших обучение на 30 сентября 2022 г." type="text" name="one">
                                <input placeholder="Плановая численность обученных в 4-м квартале 2022 г." type="text" name="one">
                            </div>
                            <label for="two">2. Магистерская программа "Управление цифровыми трансформациями" (СПбГЭТУ «ЛЭТИ»)</label>
                            <div class="answer">
                                <input placeholder="Фактическая численность прошедших обучение на 30 сентября 2022 г." type="text" name="two">
                                <input placeholder="Плановая численность обученных в 4-м квартале 2022 г." type="text" name="two">
                            </div>
                        </div>
                        <h4 id="block_3.3">Работники профильных подразделений; Работники, ответственные за вопросы информационной безопасности </h4>
                        <div class="block" id="block_3.3a">
                            <label for="one">Управление на основе данных (5-модульная годичная программа профессиональной переподготовки) ("Газпром корпоративный институт")</label>
                            <div class="answer">
                                <input placeholder="Фактическая численность прошедших обучение на 30 сентября 2022 г." type="text" name="one">
                                <input placeholder="Плановая численность обученных в 4-м квартале 2022 г." type="text" name="one">
                            </div>
                        </div>
                        <h4 id="block_3.4">Работники служб по управлению персоналом </h4>
                        <div class="block" id="block_3.4a">
                            <label for="one">Цифровая трансформация в управлении человеческими ресурсами ("Газпром корпоративный институт")</label>
                            <div class="answer">
                                <input placeholder="Фактическая численность прошедших обучение на 30 сентября 2022 г." type="text" name="one">
                                <input placeholder="Плановая численность обученных в 4-м квартале 2022 г." type="text" name="one">
                            </div>
                        </div>
                        <h4 id="block_3.5">Работники непрофильных подразделений; Работники служб по управлению персоналом </h4>
                        <div class="block" id="block_3.5a">
                            <label for="one">Организация цифровой трансформации компании (5-модульная годичная программа профессиональной переподготовки) ("Газпром корпоративный институт")</label>
                            <div class="answer">
                                <input placeholder="Фактическая численность прошедших обучение на 30 сентября 2022 г." type="text" name="one">
                                <input placeholder="Плановая численность обученных в 4-м квартале 2022 г." type="text" name="one">
                            </div>
                        </div>
                        <h4 id="block_3.6">Программы обучения для реализации цифровых инициатив </h4>
                        <div class="block" id="block_3.6a">
                            <label for="one">Применение цифровых двойников в нефтегазовой отрасли ("Газпром корпоративный институт")</label>
                            <div class="answer">
                                <input placeholder="Фактическая численность прошедших обучение на 30 сентября 2022 г." type="text" name="one">
                                <input placeholder="Плановая численность обученных в 4-м квартале 2022 г." type="text" name="one">
                            </div>
                        </div>
                    </div>
                    <button class="save_btn" id="first">Далее</button>
                </div>
        </section>
    </section>
</body>
<script>
const first = document.getElementById('first');
first.addEventListener('click', ()=>{
    document.getElementById('first_b').classList.toggle('active')
    document.getElementById('first_b').classList.toggle('slide-right')
    document.getElementById('second_b').classList.toggle('active')
    document.getElementById('second_b').classList.toggle('slide-right')
})
const second = document.getElementById('second');
second.addEventListener('click', ()=>{
    document.getElementById('second_b').classList.toggle('active')
    document.getElementById('second_b').classList.toggle('slide-right')
    document.getElementById('first_b').classList.remove('active')
    document.getElementById('first_b').classList.remove('slide-right')
})
const block_1 = document.getElementById('block_1');
block_1.addEventListener('click', ()=>{
    document.getElementById('svg_b1').classList.toggle('rotate')
    document.getElementById('block_1a').classList.toggle('active')
    document.getElementById('block_1a').classList.toggle('slide-right')
})
const block_2 = document.getElementById('block_2');
block_2.addEventListener('click', ()=>{
    document.getElementById('svg_b2').classList.toggle('rotate')
    document.getElementById('block_2a').classList.toggle('active')
    document.getElementById('block_2a').classList.toggle('slide-right')
})
const block_3 = document.getElementById('block_3');
block_3.addEventListener('click', ()=>{
    document.getElementById('svg_b3').classList.toggle('rotate')
    document.getElementById('block_3a').classList.toggle('active')
    document.getElementById('block_3a').classList.toggle('slide-right')
    document.getElementById('block_3.1a').classList.toggle('active')
    document.getElementById('block_3.1a').classList.toggle('slide-right')
    document.getElementById('block_3.2a').classList.toggle('active')
    document.getElementById('block_3.2a').classList.toggle('slide-right')
    document.getElementById('block_3.3a').classList.toggle('active')
    document.getElementById('block_3.3a').classList.toggle('slide-right')
    document.getElementById('block_3.4a').classList.toggle('active')
    document.getElementById('block_3.4a').classList.toggle('slide-right')
    document.getElementById('block_3.5a').classList.toggle('active')
    document.getElementById('block_3.5a').classList.toggle('slide-right')
    document.getElementById('block_3.6a').classList.toggle('active')
    document.getElementById('block_3.6a').classList.toggle('slide-right')
})
function number(){
    if (event.keyCode < 48 || event.keyCode > 57)
    event.returnValue= false;
    
}
</script>
</html>