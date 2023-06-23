<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include $_SERVER['DOCUMENT_ROOT'].'/assets/config/phpConfig.php';
        include $_SERVER['DOCUMENT_ROOT'].'/test/embed.php'; // generate button
    ?>
</head>
<body>
    <div class="websiteContainer">
        <div class="websiteNavigationBar">
            <div class="menuOption" status=1>
                <div class="menuOption-bg"></div><div class="menuOption-pattern"></div>
                <div class="runningText"></div>
                <div class="-alt-menuOption-WorkingPlace"></div>
                <div class="menuOption-WorkingPlace">
                    <div class="menuOption-closeButton">
                        <div onclick="activateMenuOption()"></div>
                    </div>
                    <div class="menuOption-boxContent">
                        <div class="boxContent-listNav">
                            <div class="boxContent-listNav-Container">
                                <div>
                                    <a href="#" class="menuOption-1">
                                        <div class="menuOption-Animation_T"></div>
                                        <div class="menuOption-Animation_B"></div>
                                        <div class="menuOption-Content">
                                            <div class="menuOption-Content-Icon"><div></div></div>
                                            <div class="menuOption-Content-Text"><div><div class="menuOption-Content-Text_en">HOME</div><div class="menuOption-Content-Text_lang">หน้าหลัก</div></div></div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="menuOption-2">
                                        <div class="menuOption-Animation_T"></div>
                                        <div class="menuOption-Animation_B"></div>
                                        <div class="menuOption-Content">
                                            <div class="menuOption-Content-Icon"><div></div></div>
                                            <div class="menuOption-Content-Text"><div><div class="menuOption-Content-Text_en">ABOUT US</div><div class="menuOption-Content-Text_lang">เกี่ยวกับอนิเมะเรื่องนี้</div></div></div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="menuOption-3">
                                        <div class="menuOption-Animation_T"></div>
                                        <div class="menuOption-Animation_B"></div>
                                        <div class="menuOption-Content">
                                            <div class="menuOption-Content-Icon"><div></div></div>
                                            <div class="menuOption-Content-Text"><div><div class="menuOption-Content-Text_en">CHARACTERS</div><div class="menuOption-Content-Text_lang">ตัวละคร</div></div></div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="menuOption-4">
                                        <div class="menuOption-Animation_T"></div>
                                        <div class="menuOption-Animation_B"></div>
                                        <div class="menuOption-Content">
                                            <div class="menuOption-Content-Icon"><div></div></div>
                                            <div class="menuOption-Content-Text"><div><div class="menuOption-Content-Text_en">UPDATES</div><div class="menuOption-Content-Text_lang">อัพเดท</div></div></div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="menuOption-5">
                                        <div class="menuOption-Animation_T"></div>
                                        <div class="menuOption-Animation_B"></div>
                                        <div class="menuOption-Content">
                                            <div class="menuOption-Content-Icon"><div></div></div>
                                            <div class="menuOption-Content-Text"><div><div class="menuOption-Content-Text_en">NEWS</div><div class="menuOption-Content-Text_lang">ข่าวสาร</div></div></div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="menuOption-6">
                                        <div class="menuOption-Animation_T"></div>
                                        <div class="menuOption-Animation_B"></div>
                                        <div class="menuOption-Content">
                                            <div class="menuOption-Content-Icon"><div></div></div>
                                            <div class="menuOption-Content-Text"><div><div class="menuOption-Content-Text_en">ANIME</div><div class="menuOption-Content-Text_lang">อนิเมะ</div></div></div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="menuOption-7">
                                        <div class="menuOption-Animation_T"></div>
                                        <div class="menuOption-Animation_B"></div>
                                        <div class="menuOption-Content">
                                            <div class="menuOption-Content-Icon"><div></div></div>
                                            <div class="menuOption-Content-Text"><div><div class="menuOption-Content-Text_en">MOVIES</div><div class="menuOption-Content-Text_lang">ภาพยนตร์</div></div></div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="menuOption-8">
                                        <div class="menuOption-Animation_T"></div>
                                        <div class="menuOption-Animation_B"></div>
                                        <div class="menuOption-Content">
                                            <div class="menuOption-Content-Icon"><div></div></div>
                                            <div class="menuOption-Content-Text"><div><div class="menuOption-Content-Text_en">MANGA</div><div class="menuOption-Content-Text_lang">มังงะ</div></div></div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="menuOption-9">
                                        <div class="menuOption-Animation_T"></div>
                                        <div class="menuOption-Animation_B"></div>
                                        <div class="menuOption-Content">
                                            <div class="menuOption-Content-Icon"><div></div></div>
                                            <div class="menuOption-Content-Text"><div><div class="menuOption-Content-Text_en">DRAMA CD</div><div class="menuOption-Content-Text_lang">ดราม่าซีดี</div></div></div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="menuOption-10">
                                        <div class="menuOption-Animation_T"></div>
                                        <div class="menuOption-Animation_B"></div>
                                        <div class="menuOption-Content">
                                            <div class="menuOption-Content-Icon"><div></div></div>
                                            <div class="menuOption-Content-Text"><div><div class="menuOption-Content-Text_en">BOOKS AND GOODS</div><div class="menuOption-Content-Text_lang">หนังสือ และ สินค้า</div></div></div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="menuOption-11">
                                        <div class="menuOption-Animation_T"></div>
                                        <div class="menuOption-Animation_B"></div>
                                        <div class="menuOption-Content">
                                            <div class="menuOption-Content-Icon"><div></div></div>
                                            <div class="menuOption-Content-Text"><div><div class="menuOption-Content-Text_en">STAFFS</div><div class="menuOption-Content-Text_lang">พนักงาน</div></div></div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="menuOption-12">
                                        <div class="menuOption-Animation_T"></div>
                                        <div class="menuOption-Animation_B"></div>
                                        <div class="menuOption-Content">
                                            <div class="menuOption-Content-Icon"><div></div></div>
                                            <div class="menuOption-Content-Text"><div><div class="menuOption-Content-Text_en">MUSIC</div><div class="menuOption-Content-Text_lang">เพลงประกอบ</div></div></div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="menuOption-13">
                                        <div class="menuOption-Animation_T"></div>
                                        <div class="menuOption-Animation_B"></div>
                                        <div class="menuOption-Content">
                                            <div class="menuOption-Content-Icon"><div></div></div>
                                            <div class="menuOption-Content-Text"><div><div class="menuOption-Content-Text_en">GALLERIES</div><div class="menuOption-Content-Text_lang">รูปภาพ</div></div></div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="menuOption-14">
                                        <div class="menuOption-Animation_T"></div>
                                        <div class="menuOption-Animation_B"></div>
                                        <div class="menuOption-Content">
                                            <div class="menuOption-Content-Icon"><div></div></div>
                                            <div class="menuOption-Content-Text"><div><div class="menuOption-Content-Text_en">SPECIALS</div><div class="menuOption-Content-Text_lang">ของพิเศษ</div></div></div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="menuOption-15">
                                        <div class="menuOption-Animation_T"></div>
                                        <div class="menuOption-Animation_B"></div>
                                        <div class="menuOption-Content">
                                            <div class="menuOption-Content-Icon"><div></div></div>
                                            <div class="menuOption-Content-Text"><div><div class="menuOption-Content-Text_en">DISCUSSIONS</div><div class="menuOption-Content-Text_lang">การอภิปราย</div></div></div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="menuOption-16">
                                        <div class="menuOption-Animation_T"></div>
                                        <div class="menuOption-Animation_B"></div>
                                        <div class="menuOption-Content">
                                            <div class="menuOption-Content-Icon"><div></div></div>
                                            <div class="menuOption-Content-Text"><div><div class="menuOption-Content-Text_en">REPORT ISSUES</div><div class="menuOption-Content-Text_lang">รายงาน</div></div></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="boxContent-footer">
                            <div class="boxContent-footer-SocialLink">
                                <a title="houtarou.hyouka | community" sc='dc' href="https://discord.com/invite/UV8hHS7Nd9"></a>
                                <a title='myhero.academia fansite | twitter' sc='tw' href="https://www.twitter.com/@narawat1997"></a>
                                <a title='sinnohsatoshi.1203 | youtube' sc='yt' href="https://www.youtube.com/@sinnohsatoshi1203"></a>
                                <a title="settings" sc='settings' href="javascript:;"></a>
                            </div>
                            <div class="boxContent-footer-Text"> 
                                <div>&#169; 2023 fansite by houtarouhyouka1203</div>
                                <div>all of materials are belonged to kohei horikoshi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="websiteNavigationBar-NormalDevice">
                <div class="websiteNavigationBar-NormalDevice-LeftSide"></div>
                <div class="websiteNavigationBar-NormalDevice-MainSide">
                    <?php //left side for bnha logo ?>
                    <div class="websiteNavigationBar-NormalDevice-Icon">
                        <div class="websiteNavigationBar-NormalDevice-MainSide-LogoContainer"></div>
                        <div class="websiteNavigationBar-NormalDevice-MainSide-LogoTriContainer"></div>
                        <div class="websiteNavigationBar-NormalDevice-MainSide-LogoReal"><a href="//bnha.co.th"></a></div>
                    </div>

                    <?php //home button for responsive ?>
                    <div class="websiteNavigationBar-Home" onclick="activateMenuOption()" >
                        <div class="menuBar-NavTextFormat-Icon">
                            <div class="menuBar-NavTextFormat-Home-Icon"></div>
                        </div>
                    </div>
                    <div class="websiteNavigationBar-Discord" >
                        <div class="menuBar-NavTextFormat-Icon">
                            <a class="menuBar-NavTextFormat-Discord-Icon" href="//discord.com/"></a>
                        </div>
                    </div> 
                    <div class="websiteNavigationBar-Twitter">
                        <div class="menuBar-NavTextFormat-Icon">
                            <a class="menuBar-NavTextFormat-Twitter-Icon" href="//twitter.com/@narawat1997"></a>
                        </div>
                    </div> 
                    <?php //list button when being normal ?>
                    <div class="websiteNavigationBar-NormalDevice-Controls websiteNavigationBar-RightNavigation">
                        <!-- content inside when no needing responsive -->
                        <div class="websiteNavigationBar-Inline-Controls websiteNavigationBar-NormalDevice-Controls-1"
                            onclick="activateMenuOption()" 
                        >
                             <div class="menuBar-NavTextFormat-1 websiteNavigationBar-NormalDevice-Controls-Inner menuBar-NavTextFormat">MENU</div>
                        </div>
                        <a class="websiteNavigationBar-Inline-Controls websiteNavigationBar-NormalDevice-Controls-2 " href="/en/homepage">
                             <div class="menuBar-NavTextFormat-2 websiteNavigationBar-NormalDevice-Controls-Inner menuBar-NavTextFormat">UPDATES</div>
                        </a>
                        <a class="websiteNavigationBar-Inline-Controls websiteNavigationBar-NormalDevice-Controls-3 " href="/vi/homepage">
                             <div class="menuBar-NavTextFormat-3 websiteNavigationBar-NormalDevice-Controls-Inner menuBar-NavTextFormat">ABOUT</div>
                        </a>
                        <a class="websiteNavigationBar-Inline-Controls websiteNavigationBar-NormalDevice-Controls-4 " href="/th/homepage">
                             <div class="menuBar-NavTextFormat-4 websiteNavigationBar-NormalDevice-Controls-Inner menuBar-NavTextFormat">NEWS</div>
                        </a> 
                        <!-- mha logo when responsive -->
                        <a class="websiteNavigationBar-ResponsiveLogo" href="//bnha.co.th"></a> 
                        <!-- searchbox --> 
                        <div class="websiteNavigationBar-Inline-Controls websiteNavigationBar-NormalDevice-Controls-SearchBox ">
                             <input type="text" name="inputSearch" class="websiteNavigationBar-SearchInner" a="type here and press enter to search" placeholder="พิมพ์ที่นี่แล้วกดเอ็นเตอร์เพื่อการค้นหา" onfocus="activateSearchSuggestion()" onfocusout="deactivateSearchSuggestion()" >
                        </div>                                           
                    </div>
                    <?php //search button for responsive ?>
                    <div class="websiteNavigationBar-Search"
                         onclick="activateSearchBar()" status=1
                    >
                        <div class="menuBar-NavTextFormat-Icon">
                            <div class="menuBar-NavTextFormat-Search-Icon"></div>
                        </div>
                    </div> 
                </div>
                <div class="websiteNavigationBar-NormalDevice-RightSide"></div>
            </div>
            <div class="searchSuggestions">
                <div class="searchSuggestions-1" onmousedown="alert()"></div>
                <div class="searchSuggestions-2" onmousedown="alert()"></div>
                <div class="searchSuggestions-3" onmousedown="alert()"></div>
                <div class="searchSuggestions-4" onmousedown="alert()"></div>
                <div class="searchSuggestions-viewMore" onmousedown="alert()">
                    <div>
                        <div class="searchSuggestions-viewMore-Caption">show more results</div>
                        <div class="searchSuggestions-viewMore-Icon"></div>
                    </div>
                </div>
            </div>
        </div>

        <?php generate('{"name": "websiteTopPage-topPageButton", "altText": "click here to scroll up to the top", "type": "button", "img": "true", "caption": "", "action": "setTimeout(function () {window.scrollTo(0, 0);},2);", "classOption": ""}')?>

        <div class="websiteContentInside">
            <div class="websiteHomepage">
                <div class="animePosterImage"></div>
                <div class="websiteCreditText">
                    <div class="textInsideOnly">
                        fanmade website by @houtarouhyouka.1203
                    </div>
                </div>    
            </div>
            <div style="height: 500px;width: 10px;background: transparent;">news</div>
        </div>
    </div>
</body>
</html>