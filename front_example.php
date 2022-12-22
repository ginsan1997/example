<!DOCTYPE html>
<html>
    <link href="rustStyle.css" rel="stylesheet" type="text/css">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:image" content="https://gamestats.fun/img/banner.png" />
        <meta property="og:image:secure_url" content="https://gamestats.fun/img/banner.png"/>
        <meta property="og:image:type" content="image/png"/>
        <meta property="og:image:width" content="500"/>
        <meta property="og:locale" content="ru_RU" />
        <meta name="Author" content="Kira Show">


        <?php include ('rustdata.php') ;
        require ('steamauth/steamauth.php');  
        ?>
        
       
        <meta charset="utf-8">
        <title>Rust Stats</title>
        
 </head>
<body>


<div class="bg">


<?php  echo $strl ?>
<div class="topBlock">
            <div class="iconandname">
            <div class="centertop">  
                    <a href="/"><div class="nameweb"><img id="icon" src="img/1.png"> <span>GameStat</span></div></a></div>
                    <img class="topCrown" src="img/crown.png"> <a href="/supported.php"><button class="supported"> <span>Поддержать</span></button></a>
                    <button class="forAD"> <span>Сотрудничество</span></button>
            </div>
    </div>
<div class="GameStats">
        <div class="infotext"><span>Статистика не отображается или отобращается частично? Проверьте в настройках конфиденциальности доступ к данным STEAM. <br/>Нет статистики по игре этого аккаунта в связи отсутствия игры или игрок вовсе не взаимодействовал с параметром .<br/></span></div>
        <div class="middleBlock">
            <div class="leftMiddleBlock">
            
                <div>
                    <form method="get" action="" id="rustdata">
                    <div class="SteamInfo"><span class="idSteam">ID профиля Steam</span> <img class="imgInfo" id="imgInfo" src="img/info.png"> </div>
                    
                   
                        <div class="searchblock"> <input type="text" name="SteamId" class="searchText" placeholder="76561198115320309"> <button type="submit" id="getData" class="btn_search"><img class="imgSrc" src="img/search.png"></button></div>
                    </form>
                    </div>
            </div>
        </div> 


       


       <div class="rightBlock">
    <div class="leftpart">
    <div class="baseStatLeft">
    <div class="profileIMG"><img src="<?php echo $SteamData -> response -> players[0]->avatarmedium?>"></div>
    <div><div class="NameProfile"><span><?php echo $SteamData -> response -> players[0]->personaname ?></span></div>
    <div class="PlayTime"><span id="houringame">Время в игре: <?php echo $playallTime ?> ч.</span> <br/> <span id="houringameWeek">Последние 2 недели: <?php echo $playLastTwoWeek?> ч.</span>
    
    </div>

    </div>

    </div>
    <div class="mainStat">    
                        
    <div class="staticLeft"><span class="statisctic"><img src="img/toch.png"> Точность</span><span class="numbersBase"><?php echo round((($bullethitplayer / $bulletfired) * 100),2).'%'  ?> </span></div>
    <div class="staticLeft"><span class="statisctic"><img src="img/kd.png"> K/D</span><span class="numbersBase"><?php  echo round(($killplayer / $deaths),2) ?></span></div>
                       </div>
                        </div>
                        <div class="blockLine"></div>
                    <div class="rightpart">
                        <div class="mainStat2">                   
                        <div class="static"><span class="statisctic2"><img src="img/headshot.png"> Хедшоты</span><span class="numbersBase"><?php  echo $headshot?> </span></div>
                        <div class="static"><span class="statisctic2"><img src="img/hits.png"> Попаданий по игроку</span><span class="numbersBase"> <?php  echo round(($bullethitplayer + $arrowhitentity))?></span></div>
                        <div class="static"><span class="statisctic2"><img src="img/killed.png"> Убито игроков</span><span class="numbersBase"><?php  echo $killplayer ?></span></div>
                        <div class="static"><span class="statisctic2"><img src="img/death.png"> Смерти</span><span class="numbersBase"><?php  echo $deaths ?></span></div>
                        <div class="staticend"><span class="statisctic2"><img src="img/miner.png"> Добыто ресурсов</span><span class="numbersBase"><?php  echo round($harveststones + $harvestwood + $acquiredmetalore ) ?></span></div>  
                    </div>
                        </div>
    </div>

</div>


<div class="MainStatLeftBlock">
<div class="baseStats">
<div class="navBTN">
                    <button class="btn active" id="btn_kills"><span>Убийства</span></button>
                    <button class="btn" id="btn_death"><span>Смерти</span></button>
                    <button class="btn" id="btn_hits"><span>Выстрелы</span></button>
                    <button class="btn" id="btn_gathers"><span>Добыча</span></button>
                    <button class="btn" id="btn_else"><span>Прочее</span></button>
                </div>
                
                <div class="centerblock">  
        <div class="killInfo" id="killInfo">
                    <div class="baseInfoLeft">
                        <div class="lineBaseInfo"><span class="statisctic"> Убито игроков</span><span class="numbersBaseInfo"><?php  echo $killplayer ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Убито медведей</span><span class="numbersBaseInfo"><?php  echo $killbear ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Убито кабанов</span><span class="numbersBaseInfo"><?php  echo $killboar?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Убито оленей</span><span class="numbersBaseInfo"><?php  echo $killstag ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Убито куриц</span><span class="numbersBaseInfo"><?php  echo $killchicken ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Убито лошадей</span><span class="numbersBaseInfo"><?php  echo $killhorse ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Убито волков</span><span class="numbersBaseInfo"><?php  echo $killwolf ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Убито ученых</span><span class="numbersBaseInfo"><?php  echo $killscientist ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Всего убийств</span><span class="numbersBaseInfo"><?php  echo $killplayer + $killbear + $killboar + $killstag + $killchicken + $killhorse + $killwolf + $killscientist?> </span></div>
                    </div>



    </div> 

    <div class="deathInfo" id="deathInfo">
                    <div class="baseInfoLeft">
                        <div class="lineBaseInfo"><span class="statisctic">  Всего смертей</span><span class="numbersBaseInfo"><?php  echo $deaths ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Суицидов</span><span class="numbersBaseInfo"><?php  echo $deathsuicide ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Смерти от падения с высоты</span><span class="numbersBaseInfo"><?php  echo $deathfall ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Смерти от урона самому себе</span><span class="numbersBaseInfo"><?php  echo $deathselfinflicted ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Смерти от сущностей</span><span class="numbersBaseInfo"><?php  echo $deathentity ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Убит волком</span><span class="numbersBaseInfo"><?php  echo $death_wolf ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Убит медведем</span><span class="numbersBaseInfo"><?php  echo $death_bear ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Ранений</span><span class="numbersBaseInfo"><?php  echo $wounded; ?> </span></div>
                    </div>



                    </div>




        <div class="FireInfo" id="FireInfo">
                    <div class="baseInfoLeft">
                        <div class="lineBaseInfo"><span class="statisctic"> Выстрелов из огнестрела</span><span class="numbersBaseInfo"><?php  echo $bulletfired; ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Выстрелов из лука</span><span class="numbersBaseInfo"><?php  echo $arrowfired ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Попадание по игроку пулей</span><span class="numbersBaseInfo"><?php  echo $bullethitplayer ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Попадание по игроку стрелой</span><span class="numbersBaseInfo"><?php  echo $arrowhitentity ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Стрел попало в здания</span><span class="numbersBaseInfo"><?php  echo $arrowhitbuilding; ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Пуль попало в здания</span><span class="numbersBaseInfo"><?php  echo $bullethitbuilding ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Пуль попало в объекты</span><span class="numbersBaseInfo"><?php  echo $bullethitentity ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Хедшотов</span><span class="numbersBaseInfo"><?php  echo $headshot ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Выстрелов из дробовика</span><span class="numbersBaseInfo"><?php  echo $shotgunfired ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Попадание по игроку из дробовика</span><span class="numbersBaseInfo"><?php  echo $shotgunhitplayer; ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Выстрелов из дробовика по зданию</span><span class="numbersBaseInfo"><?php  echo $shotgunhitbuilding; ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Ударов в ближнем бою</span><span class="numbersBaseInfo"><?php  echo $meleestrikes; ?> </span></div>


                    </div></div>

    <div class="gatherInfo" id="gatherInfo">
                    <div class="baseInfoLeft">
                        <div class="lineBaseInfo"><span class="statisctic"> Добыча животного жира</span><span class="numbersBaseInfo"><?php  echo $harvestfatanimal ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Добыто камня</span><span class="numbersBaseInfo"><?php  echo $harveststones; ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Добыто ткани</span><span class="numbersBaseInfo"><?php  echo $harvestcloth ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Добыто дерева</span><span class="numbersBaseInfo"><?php  echo $harvestwood?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Добыто металлической руды</span><span class="numbersBaseInfo"><?php  echo $acquiredmetalore; ?> </span></div>
                        <!-- <div class="lineBaseInfo"><span class="statisctic"> Добыто металлической руды</span><span class="numbersBaseInfo"><php  echo $harvestmetalore  ?> </span></div> -->
                        <!-- <div class="lineBaseInfo"><span class="statisctic"> Добыто серной руды</span><span class="numbersBaseInfo"><php  echo $harvestsulfurore ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Добыто фрагментов костей</span><span class="numbersBaseInfo"><php  echo $harvestbonefragments ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Добыл человеческого мяса</span><span class="numbersBaseInfo"><php  echo $harvesthumanmeatraw ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Добыто мяса волка</span><span class="numbersBaseInfo"><php  echo $harvestwolfmeatraw ?> </span></div> -->
                        <div class="lineBaseInfo"><span class="statisctic"> Получено ТНК</span><span class="numbersBaseInfo"><?php  echo $acquiredlowgradefuel; ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Получено скрапа</span><span class="numbersBaseInfo"><?php  echo $acquiredscrap ?> </span></div>
                    

                    </div>

                    </div>
                    
        <div class="elseInfo" id="elseInfo">
                    <div class="baseInfoLeft">
                        <div class="lineBaseInfo"><span class="statisctic"> Изучено предметов</span><span class="numbersBaseInfo"><?php  echo $blueprintstudied ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Поднял раненых</span><span class="numbersBaseInfo"><?php  echo $woundedassisted; ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Размещено блоков</span><span class="numbersBaseInfo"><?php  echo $placedblocks ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Улучшено блоков</span><span class="numbersBaseInfo"><?php  echo  $upgradedblocks ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Время разговора</span><span class="numbersBaseInfo"><?php  echo round($secondsspeaking) . 'c'; ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Уничтожено бочек</span><span class="numbersBaseInfo"><?php  echo $destroyedbarrels ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Сыграл музыкальных нот</span><span class="numbersBaseInfo"><?php  echo $InstrumentNotesPlayed ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Гранат брошено</span><span class="numbersBaseInfo"><?php  echo $grenadesthrown; ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Пробежал километров</span><span class="numbersBaseInfo"><?php  echo $topologyroadduration; ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Проехал на лошади</span><span class="numbersBaseInfo"><?php  echo $horsedistanceridden ?> </span></div>
                        <div class="lineBaseInfo"><span class="statisctic"> Калорий употреблено</span><span class="numbersBaseInfo"><?php  echo round($caloriesconsumed); ?> </span></div>
                        
                    </div>

</div>

<div class="baseInfoRight">
        <div class="friendslist"> 

                    
        <div class="loadText"><div class="frindsstatchecktext"><span>Друзья с игрой</span> </div> <div class="btnArea"><button href="#" class="button expand" id="ajaxbtn" value = '<?php echo $id ?>'><span>Показать друзей</span></button></div></div>
        <div class="friendListCheck" id="friendlistCheck">
        <!-- <div id="imgSpinnerBlock"><img id="imgSpinnerBlock1" src="/img/Ajax-loader.gif"></div> -->
        <div id="imgSpinnerBlock"><div class="loader"><div></div><div></div></div></div>
        <span id="textblockFriends">Чтобы узнать статистику ваших друзей, нажмите “Показать друзей” </span>

        </div></div> 
                <div class="banner"><img id="adIMG" src="../img/banner.png"></div>
            </div>
        </div>
        </div>


        </div>



                <!-- ТОП КИЛОВ 10 -->
        <!-- <div class="profileFriend">  include ('testdb.php')  </div> -->
        <!-- ТОП КИЛОВ 10 -->




<!-- Завершается див бэкграунда -->
</div>


<div class="creators">
    <span>Developer: @KiraShow</span><br/>
    <span>Designer: @Obliviuz</span>
</div>


</body>
<script src="//cdn.jsdelivr.net/npm/share-buttons/dist/share-buttons.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="jsRUST.js"></script>




</html>