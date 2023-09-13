<?php
if (isset($_GET['d'])) {
    $d = $_GET['d'];
    $today = date("Ymd");
    if ($today >= $d) {
        ?>
        <p><img src="http://cdn.beyondeternal.com/sites/winter/xmas/gbixmasblogbullet.gif" alt="" width="18" height="19" border="0" style="vertical-align:middle;" /> <a href="advent-calendar-2019.php">Click here to go back</a> <img src="http://cdn.beyondeternal.com/sites/winter/xmas/gbixmasblogbullet.gif" alt="" width="18" height="19" border="0" style="vertical-align:middle;" /></p>
        <p>&nbsp;</p>
        <?php
        switch ($d) {
            case "20191201":
                ac_dec01();
                break;
            case "20191202":
                ac_dec02();
                break;
            case "20191203":
                ac_dec03();
                break;
            case "20191204":
                ac_dec04();
                break;
            case "20191205":
                ac_dec05();
                break;
            case "20191206":
                ac_dec06();
                break;
            case "20191207":
                ac_dec07();
                break;
            case "20191208":
                ac_dec08();
                break;
            case "20191209":
                ac_dec09();
                break;
            case "20191210":
                ac_dec10();
                break;
            case "20191211":
                ac_dec11();
                break;
            case "20191212":
                ac_dec12();
                break;
            case "20191213":
                ac_dec13();
                break;
            case "20191214":
                ac_dec14();
                break;
            case "20191215":
                ac_dec15();
                break;
            case "20191216":
                ac_dec16();
                break;
            case "20191217":
                ac_dec17();
                break;
            case "20191218":
                ac_dec18();
                break;
            case "20191219":
                ac_dec19();
                break;
            case "20191220":
                ac_dec20();
                break;
            case "20191221":
                ac_dec21();
                break;
            case "20191222":
                ac_dec22();
                break;
            case "20191223":
                ac_dec23();
                break;
            case "20191224":
                ac_dec24();
                break;
            case "20191225":
                ac_dec25();
                break;
            default:
                nothing();
                break;
        }
    } else {
        too_early();
    }
} else {
    calendar();
}

function calendar() {
    ?>
    <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" id="advent_calendar" class="tbl">
        <thead>
            <tr>
                <th colspan="7"><img src="http://cdn.beyondeternal.com/sites/winter/xmas/gbixmasblogbullet.gif" alt="" width="18" height="19" border="0" /> December <img src="http://cdn.beyondeternal.com/sites/winter/xmas/gbixmasblogbullet.gif" alt="" width="18" height="19" border="0" /></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th width="50">S</th>
                <th width="50">M</th>
                <th width="50">T</th>
                <th width="50">W</th>
                <th width="50">TH</th>
                <th width="50">F</th>
                <th width="50">S</th>
            </tr>
            <tr>
                <td><a href="?d=20191201">01</a></td>
                <td><a href="?d=20191202">02</a></td>
                <td><a href="?d=20191203">03</a></td>
                <td><a href="?d=20191204">04</a></td>
                <td><a href="?d=20191205">05</a></td>
                <td><a href="?d=20191206">06</a></td>
                <td><a href="?d=20191207">07</a></td>
            </tr>
            <tr>
                <td><a href="?d=20191208">08</a></td>
                <td><a href="?d=20191209">09</a></td>
                <td><a href="?d=20191210">10</a></td>
                <td><a href="?d=20191211">11</a></td>
                <td><a href="?d=20191212">12</a></td>
                <td><a href="?d=20191213">13</a></td>
                <td><a href="?d=20191214">14</a></td>
            </tr>
            <tr>
                <td><a href="?d=20191215">15</a></td>
                <td><a href="?d=20191216">16</a></td>
                <td><a href="?d=20191217">17</a></td>
                <td><a href="?d=20191218">18</a></td>
                <td><a href="?d=20191219">19</a></td>
                <td><a href="?d=20191220">20</a></td>
                <td><a href="?d=20191221">21</a></td>
            </tr>
            <tr>
                <td><a href="?d=20191222">22</a></td>
                <td><a href="?d=20191223">23</a></td>
                <td><a href="?d=20191224">24</a></td>
                <td><a href="?d=20191225">25</a></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <p>&nbsp;</p>
    <p>
        <strong>My Advent Calendar button:</strong></p>
        <a href="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/bnr_advent19_be.gif" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/bnr_advent19_be.gif" /></a>
    </p>
    <p>
        If you want siggies from my calendar, please <a href="https://beyondeternal.com/contact" target="_blank">email me</a> your name, url and hair color.
    </p>
    <p>&nbsp;</p>
    <h2>Friends Winter/Christmas Site 2019</h2>
    <p><strong>TCG Advents Calendars:</strong></p>
    <p>
        <a href="http://tcg-xmas.ingerssite.de" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2018/advent/in-bannerTCG-XMAS14.gif" /></a>
        <a href="http://juliespixels.co.uk/Christmas-Fun/calendar/adventlinkware.html" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/bnr_advent19_jp.gif" /></a>
        <a href="http://www.fancycricket.net/?p=11201" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2018/advent/banner18-fcck.gif" /></a>
        <a href="http://mely-arts.be/melyartpixels/index.php?page=calendrier" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/bnr_advent19_mely.gif" /></a>
        <a href="http://tcg.whimsyattic.net/" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/bnr_advent19_wa.gif" /></a>
        <a href="http://cantinhodapqnapixel.altervista.org/SigMachine/ChristmasCalendar19/MerryChristmas.html" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/bnr_advent19_cdp.png" /></a>
        <a href="http://pixelpassionz.com/TCG/AdventCalendar2019.html" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/bnr_advent19_pp.gif" /></a>
        <a href="http://chezsylviapixel.fr/Calendrier-Avent2019/CSP_AdventCalendar2014.html" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/bnr_advent19_csp.gif" /></a>
    </p>
    <p><strong>Other Advents Calendars:</strong></p>
    <p>
        <a href="http://www.fantasticpixeldreams.at/pixelsite/christmas/index.htm" target="_blank"><img src="http://cdn.beyondeternal.com/sites/winter/banners/bnr_fpd.gif" /></a>
        <a href="http://thepixelpalace.forumotion.com/t915-2019-advent-calendar" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/bnr_advent19_tpp.gif" /></a>
        <a href="http://juliespixels.co.uk/Christmas-Fun/calendar4all/advent4all.html" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/bnr_advent19_jp.gif" /></a>
    </p>
    <?php
}

function ac_dec01() {
    ?>
    <p>
        <img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_01_mpp_wa_euri.gif" />
    </p>
    <p>
        Tubes by: <a href="http://myprettypixels.com/" target="_blank">MPP</a> &amp; <a href="http://whimsyattic.net/" target="_blank">WA</a>.
    </p>
    <hr />
    <p>
        <a href="https://1.bp.blogspot.com/-6h_W8llim8I/Xdd5ERP_MgI/AAAAAAAAuU0/ukXClSbf4_8joAyg7qmkFq_RuHn5TOw5gCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Annica.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-6h_W8llim8I/Xdd5ERP_MgI/AAAAAAAAuU0/ukXClSbf4_8joAyg7qmkFq_RuHn5TOw5gCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Annica.gif" data-original-width="123" data-original-height="127" /></a><a href="https://2.bp.blogspot.com/-rFSDK3XI0tA/Xdd5EW2NqUI/AAAAAAAAuUs/oEjY-0l4gIAnUlYnhTpf8TeoFl7jcUY3gCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Bella.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-rFSDK3XI0tA/Xdd5EW2NqUI/AAAAAAAAuUs/oEjY-0l4gIAnUlYnhTpf8TeoFl7jcUY3gCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Bella.gif" data-original-width="123" data-original-height="127" /></a><a href="https://2.bp.blogspot.com/-7flcmmvH3v8/Xdd5EfEIy6I/AAAAAAAAuUw/8m6aBeq-aTwxNIn4rs-jTo43fModDZwdwCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Beth.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-7flcmmvH3v8/Xdd5EfEIy6I/AAAAAAAAuUw/8m6aBeq-aTwxNIn4rs-jTo43fModDZwdwCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Beth.gif" data-original-width="123" data-original-height="127" /></a><a href="https://3.bp.blogspot.com/-QPlizTzCPGQ/Xdd5FZ_daDI/AAAAAAAAuU8/SjlMTQGA_qgR6CaOgSIgtSG49lkl76wfwCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Cris.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-QPlizTzCPGQ/Xdd5FZ_daDI/AAAAAAAAuU8/SjlMTQGA_qgR6CaOgSIgtSG49lkl76wfwCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Cris.gif" data-original-width="123" data-original-height="127" /></a><a href="https://4.bp.blogspot.com/-PCqou4PR5fc/Xdd5FS3Qq9I/AAAAAAAAuU4/yFzOSylX6K4NtrVLrnSmAmZsiVSKtYNbACLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Darlene.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-PCqou4PR5fc/Xdd5FS3Qq9I/AAAAAAAAuU4/yFzOSylX6K4NtrVLrnSmAmZsiVSKtYNbACLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Darlene.gif" data-original-width="123" data-original-height="127" /></a><a href="https://4.bp.blogspot.com/-jokYIMLo_mE/Xdd5Fiv1uJI/AAAAAAAAuVA/u7pFMETatT8HPkMEFst0cRhWEYohzHxewCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Heather.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-jokYIMLo_mE/Xdd5Fiv1uJI/AAAAAAAAuVA/u7pFMETatT8HPkMEFst0cRhWEYohzHxewCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Heather.gif" data-original-width="123" data-original-height="127" /></a><a href="https://2.bp.blogspot.com/-w3kZGkJzf1w/Xdd5Ggb3wRI/AAAAAAAAuVE/s9JKHA0LHCcMQ63C8za9qxbeNWpr8ksywCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Inger.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-w3kZGkJzf1w/Xdd5Ggb3wRI/AAAAAAAAuVE/s9JKHA0LHCcMQ63C8za9qxbeNWpr8ksywCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Inger.gif" data-original-width="123" data-original-height="127" /></a><a href="https://1.bp.blogspot.com/-Pv9EqDqeH-c/Xdd5G1jCCbI/AAAAAAAAuVI/aqDIVW42MugYv63IW5et6Sz3IZ2MygMOgCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Julie.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-Pv9EqDqeH-c/Xdd5G1jCCbI/AAAAAAAAuVI/aqDIVW42MugYv63IW5et6Sz3IZ2MygMOgCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Julie.gif" data-original-width="123" data-original-height="127" /></a><a href="https://2.bp.blogspot.com/-_9wy8v09b50/Xdd5HIDmruI/AAAAAAAAuVM/ECj-8rc7A7opAi1itBlh2QNGaTpu_SXhACLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Marcinha.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-_9wy8v09b50/Xdd5HIDmruI/AAAAAAAAuVM/ECj-8rc7A7opAi1itBlh2QNGaTpu_SXhACLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Marcinha.gif" data-original-width="123" data-original-height="127" /></a><a href="https://1.bp.blogspot.com/-dgzGYujGPEo/Xdd5H8sC6BI/AAAAAAAAuVQ/WyGKRGbqyKkCON9ypsIQjs19AOEQeDqJQCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Mely.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-dgzGYujGPEo/Xdd5H8sC6BI/AAAAAAAAuVQ/WyGKRGbqyKkCON9ypsIQjs19AOEQeDqJQCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Mely.gif" data-original-width="123" data-original-height="127" /></a><a href="https://3.bp.blogspot.com/-kFBfbIfX3wk/Xdd5H0s4wWI/AAAAAAAAuVU/DCTo-PjzbHUBuUFYoQc7uL0BOIgrM3sWwCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Nicky.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-kFBfbIfX3wk/Xdd5H0s4wWI/AAAAAAAAuVU/DCTo-PjzbHUBuUFYoQc7uL0BOIgrM3sWwCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Nicky.gif" data-original-width="123" data-original-height="127" /></a><a href="https://1.bp.blogspot.com/-uo5TqzXzeUo/Xdd5IAWg8GI/AAAAAAAAuVY/ZG1Tp7k__FAT-sCNF5-4IH-GM6lvhbuSwCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Orella.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-uo5TqzXzeUo/Xdd5IAWg8GI/AAAAAAAAuVY/ZG1Tp7k__FAT-sCNF5-4IH-GM6lvhbuSwCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Orella.gif" data-original-width="123" data-original-height="127" /></a><a href="https://1.bp.blogspot.com/-_qIAJa6AVzw/Xdd5I-O0fMI/AAAAAAAAuVc/y5iM9B0AegYcANK9-_QKQ8_EmPYlE4GtgCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Sylvia.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-_qIAJa6AVzw/Xdd5I-O0fMI/AAAAAAAAuVc/y5iM9B0AegYcANK9-_QKQ8_EmPYlE4GtgCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Sylvia.gif" data-original-width="123" data-original-height="127" /></a><a href="https://4.bp.blogspot.com/-SJKuMPRPaPk/Xdd5IwiF5mI/AAAAAAAAuVg/0FhdKRbvcd8bOBq5-XLcR4wuVD8q_coQgCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Tami.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-SJKuMPRPaPk/Xdd5IwiF5mI/AAAAAAAAuVg/0FhdKRbvcd8bOBq5-XLcR4wuVD8q_coQgCLcBGAsYHQ/s1600/be_advent19_01_mpp_wa_Tami.gif" data-original-width="123" data-original-height="127" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-1.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec02() {
    ?>
    <p>
        <img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_02_p2p_ee_mpp_euri.gif" />
    </p>
    <p>
        Tubes by: <a href="http://pixel2pixel.forumotion.com/" target="_blank">P2P</a>,  <a href="http://elfexpressions.com/" target="_blank">EE</a> &amp;  <a href="http://myprettypixels.com/" target="_blank">MPP</a>.
    </p>
    <hr />
    <p>
        <a href="https://3.bp.blogspot.com/-smWV9fSpOcc/XeX3oc8g6tI/AAAAAAAAvEY/gPHti90yy8Aj0_ZhaX3btVb3GS1US17HwCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Annica.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-smWV9fSpOcc/XeX3oc8g6tI/AAAAAAAAvEY/gPHti90yy8Aj0_ZhaX3btVb3GS1US17HwCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Annica.gif" data-original-width="231" data-original-height="158" /></a><a href="https://1.bp.blogspot.com/-jF4L9Hcbt2o/Xdd_hhEZNrI/AAAAAAAAuWU/O-VMdFjgqgIpxEFwak0rc3ygb4nUACeggCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Bella.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-jF4L9Hcbt2o/Xdd_hhEZNrI/AAAAAAAAuWU/O-VMdFjgqgIpxEFwak0rc3ygb4nUACeggCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Bella.gif" data-original-width="231" data-original-height="158" /></a><a href="https://4.bp.blogspot.com/-gYFyTc1dnK4/Xdd_hkN3NeI/AAAAAAAAuWQ/8yfqNqvtxC89a3T0fhqdXeHmwBnl0Y-0wCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Beth.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-gYFyTc1dnK4/Xdd_hkN3NeI/AAAAAAAAuWQ/8yfqNqvtxC89a3T0fhqdXeHmwBnl0Y-0wCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Beth.gif" data-original-width="231" data-original-height="158" /></a><a href="https://2.bp.blogspot.com/-KB6WVz_zRNg/Xdd_ivjs_hI/AAAAAAAAuWc/aCUJ5aOEy14HpcrIBHm0Ueurz0fIFVjCQCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Cris.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-KB6WVz_zRNg/Xdd_ivjs_hI/AAAAAAAAuWc/aCUJ5aOEy14HpcrIBHm0Ueurz0fIFVjCQCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Cris.gif" data-original-width="231" data-original-height="158" /></a><a href="https://3.bp.blogspot.com/-6oAO8hLxzIc/Xdd_idNF5BI/AAAAAAAAuWY/kSUvGQVgovUjVB_JFdn32z_XrU64f5qNACLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Darlene.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-6oAO8hLxzIc/Xdd_idNF5BI/AAAAAAAAuWY/kSUvGQVgovUjVB_JFdn32z_XrU64f5qNACLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Darlene.gif" data-original-width="231" data-original-height="158" /></a><a href="https://2.bp.blogspot.com/-2QJRAC3adxM/Xdd_ijtCASI/AAAAAAAAuWg/YvHddVRswAEI5l07rn9mo5-moqvCxZaDQCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Heather.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-2QJRAC3adxM/Xdd_ijtCASI/AAAAAAAAuWg/YvHddVRswAEI5l07rn9mo5-moqvCxZaDQCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Heather.gif" data-original-width="231" data-original-height="158" /></a><a href="https://2.bp.blogspot.com/-088vAQakF1o/Xdd_jTsERfI/AAAAAAAAuWk/ped2gNOdD2IeSAXYirftkc-6laR6uWAFACLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Inger.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-088vAQakF1o/Xdd_jTsERfI/AAAAAAAAuWk/ped2gNOdD2IeSAXYirftkc-6laR6uWAFACLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Inger.gif" data-original-width="231" data-original-height="158" /></a><a href="https://3.bp.blogspot.com/-XmLL1CVVUJM/Xdd_jlu7ujI/AAAAAAAAuWo/balKXxtDOjkEyqbcplhRmXtGUY_kV6CpQCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Julie.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-XmLL1CVVUJM/Xdd_jlu7ujI/AAAAAAAAuWo/balKXxtDOjkEyqbcplhRmXtGUY_kV6CpQCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Julie.gif" data-original-width="231" data-original-height="158" /></a><a href="https://4.bp.blogspot.com/-hMpGNetP3JY/Xdd_jsNQcNI/AAAAAAAAuWs/ZKfc7OkLSGAkEsuPQoQCZ2zkjUHaT7aaACLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Marcinha.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-hMpGNetP3JY/Xdd_jsNQcNI/AAAAAAAAuWs/ZKfc7OkLSGAkEsuPQoQCZ2zkjUHaT7aaACLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Marcinha.gif" data-original-width="231" data-original-height="158" /></a><a href="https://4.bp.blogspot.com/-_gHhES_J8SQ/Xdd_kf-9s9I/AAAAAAAAuWw/lLIdOK6eLCod0GgnIPGNx_PadzaKUIywQCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Mely.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-_gHhES_J8SQ/Xdd_kf-9s9I/AAAAAAAAuWw/lLIdOK6eLCod0GgnIPGNx_PadzaKUIywQCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Mely.gif" data-original-width="231" data-original-height="158" /></a><a href="https://2.bp.blogspot.com/-EYmLd5VfRmI/Xdd_ky26y3I/AAAAAAAAuW0/sxF9XuoKIEQNdu7zE1vsjc0rAqlsVXqNwCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Nicky.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-EYmLd5VfRmI/Xdd_ky26y3I/AAAAAAAAuW0/sxF9XuoKIEQNdu7zE1vsjc0rAqlsVXqNwCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Nicky.gif" data-original-width="231" data-original-height="158" /></a><a href="https://4.bp.blogspot.com/-rkDfxmNydac/Xdd_kx85sII/AAAAAAAAuW4/t1-UdM0itD42NR4l0V-n_IF3yEHbz-XXwCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Orella.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-rkDfxmNydac/Xdd_kx85sII/AAAAAAAAuW4/t1-UdM0itD42NR4l0V-n_IF3yEHbz-XXwCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Orella.gif" data-original-width="231" data-original-height="158" /></a><a href="https://4.bp.blogspot.com/-qDVZtQ46pDQ/Xdd_lGbkShI/AAAAAAAAuW8/sWzR153An5oLsgRaohSATkYT9Qx_8ujBgCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Sylvia.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-qDVZtQ46pDQ/Xdd_lGbkShI/AAAAAAAAuW8/sWzR153An5oLsgRaohSATkYT9Qx_8ujBgCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Sylvia.gif" data-original-width="231" data-original-height="158" /></a><a href="https://4.bp.blogspot.com/-8fs35gw0J4s/Xdd_l5pRScI/AAAAAAAAuXA/5iVSLRWmhBABW6XE8xOwaHhH64oG5tBzgCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Tami.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-8fs35gw0J4s/Xdd_l5pRScI/AAAAAAAAuXA/5iVSLRWmhBABW6XE8xOwaHhH64oG5tBzgCLcBGAsYHQ/s1600/be_advent19_02_p2p_ee_mpp_Tami.gif" data-original-width="231" data-original-height="158" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-2.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec03() {
    ?>
    <p>
        <a href="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_01.gif" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_01.gif" /></a>
        <a href="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_02.gif" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_02.gif" /></a>
        <a href="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_03.gif" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_03.gif" /></a>
        <a href="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_04.gif" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_04.gif" /></a>
        <a href="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_05.gif" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_05.gif" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/tcg-advent-calendar-2019-siggie-1.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec04() {
    ?>
    <p>
        <img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_03_fp_mpp_euri.gif" />
    </p>
    <p>
        Tubes by: <a href="http://faerypixels.ca/" target="_blank">FP</a> &amp;  <a href="http://myprettypixels.com/" target="_blank">MPP</a>.
    </p>
    <hr />
    <p>
        <a href="https://2.bp.blogspot.com/-n_goUS9iQ2Y/XdeAg0_vhWI/AAAAAAAAuX0/SeWLZIK9_yoChqizYO9OsdQU9lulReKAgCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Annica.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-n_goUS9iQ2Y/XdeAg0_vhWI/AAAAAAAAuX0/SeWLZIK9_yoChqizYO9OsdQU9lulReKAgCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Annica.gif" data-original-width="145" data-original-height="165" /></a><a href="https://2.bp.blogspot.com/-qC1YCEb7AJA/XdeAg_ZnbQI/AAAAAAAAuXw/24Fu8DKLQ1UinJRGOOy_AP46y5FMRVXTQCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Bella.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-qC1YCEb7AJA/XdeAg_ZnbQI/AAAAAAAAuXw/24Fu8DKLQ1UinJRGOOy_AP46y5FMRVXTQCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Bella.gif" data-original-width="145" data-original-height="165" /></a><a href="https://3.bp.blogspot.com/-iSEYbMTEeXA/XdeAhNTyT6I/AAAAAAAAuX4/8Rc3AwESDIkaSG3aKf-DTUZwCv8FTQhjQCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Beth.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-iSEYbMTEeXA/XdeAhNTyT6I/AAAAAAAAuX4/8Rc3AwESDIkaSG3aKf-DTUZwCv8FTQhjQCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Beth.gif" data-original-width="145" data-original-height="165" /></a><a href="https://2.bp.blogspot.com/-Wi1QfrzX-9s/XdeAh6KlKFI/AAAAAAAAuX8/jWGHR8azV2c4bGBRj1qBH35_PGdGhlaWwCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Cris.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-Wi1QfrzX-9s/XdeAh6KlKFI/AAAAAAAAuX8/jWGHR8azV2c4bGBRj1qBH35_PGdGhlaWwCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Cris.gif" data-original-width="145" data-original-height="165" /></a><a href="https://4.bp.blogspot.com/-iZgizVwz18I/XdeAh-KDYyI/AAAAAAAAuYA/780KHydrttkG8hCDb0OaT8_Nf6_ugff-gCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Darlene.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-iZgizVwz18I/XdeAh-KDYyI/AAAAAAAAuYA/780KHydrttkG8hCDb0OaT8_Nf6_ugff-gCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Darlene.gif" data-original-width="145" data-original-height="165" /></a><a href="https://4.bp.blogspot.com/-J6a5dRUMOP0/XdeAidyo6NI/AAAAAAAAuYE/pFNGl1gX1GA_ag785OG03MqTRBJeSLXEgCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Heather.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-J6a5dRUMOP0/XdeAidyo6NI/AAAAAAAAuYE/pFNGl1gX1GA_ag785OG03MqTRBJeSLXEgCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Heather.gif" data-original-width="145" data-original-height="165" /></a><a href="https://1.bp.blogspot.com/-6RpuUmasU9I/XdeAitIJCAI/AAAAAAAAuYI/oJ49lh_E4vkneJnKuiFKCE--jzV33y-VQCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Inger.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-6RpuUmasU9I/XdeAitIJCAI/AAAAAAAAuYI/oJ49lh_E4vkneJnKuiFKCE--jzV33y-VQCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Inger.gif" data-original-width="145" data-original-height="165" /></a><a href="https://3.bp.blogspot.com/--teXczr8slw/XdeAjJqqfYI/AAAAAAAAuYM/x7FCscYb1UsTXP9BIu7lCpAeYyXvZtIBwCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Julie.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/--teXczr8slw/XdeAjJqqfYI/AAAAAAAAuYM/x7FCscYb1UsTXP9BIu7lCpAeYyXvZtIBwCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Julie.gif" data-original-width="145" data-original-height="165" /></a><a href="https://3.bp.blogspot.com/-ISzgnzsLpPk/XdeAjILJpMI/AAAAAAAAuYQ/5Js8j-zRBCkREsTyVMXereTbx-qlSznwACLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Marcinha.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-ISzgnzsLpPk/XdeAjILJpMI/AAAAAAAAuYQ/5Js8j-zRBCkREsTyVMXereTbx-qlSznwACLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Marcinha.gif" data-original-width="145" data-original-height="165" /></a><a href="https://2.bp.blogspot.com/-4ynPWmvu75Q/XdeAjqkTEvI/AAAAAAAAuYU/eRQLj6N1bPc1CwBdY36nedUBtgpag_L8QCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Mely.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-4ynPWmvu75Q/XdeAjqkTEvI/AAAAAAAAuYU/eRQLj6N1bPc1CwBdY36nedUBtgpag_L8QCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Mely.gif" data-original-width="145" data-original-height="165" /></a><a href="https://3.bp.blogspot.com/-ssYfsWL1pgk/XdeAkAcbRNI/AAAAAAAAuYY/qnbRX-qhUqYnEpt-6Ooc6bvxJdQ2JSyNACLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Nicky.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-ssYfsWL1pgk/XdeAkAcbRNI/AAAAAAAAuYY/qnbRX-qhUqYnEpt-6Ooc6bvxJdQ2JSyNACLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Nicky.gif" data-original-width="145" data-original-height="165" /></a><a href="https://2.bp.blogspot.com/-wEcDZrYKyWA/XdeAklqn6bI/AAAAAAAAuYc/tPPrEiSO7W0cl8i4mT3DcbaPKnaW1oWAgCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Orella.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-wEcDZrYKyWA/XdeAklqn6bI/AAAAAAAAuYc/tPPrEiSO7W0cl8i4mT3DcbaPKnaW1oWAgCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Orella.gif" data-original-width="145" data-original-height="165" /></a><a href="https://1.bp.blogspot.com/-EeMeK3IlgwM/XdeAlCu2TiI/AAAAAAAAuYg/BtJr5tQoOgAeHJWFPrmo9WUMOnSzFsX7ACLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Sylvia.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-EeMeK3IlgwM/XdeAlCu2TiI/AAAAAAAAuYg/BtJr5tQoOgAeHJWFPrmo9WUMOnSzFsX7ACLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Sylvia.gif" data-original-width="145" data-original-height="165" /></a><a href="https://3.bp.blogspot.com/-NEr3LeRoHAw/XdeAlY_-KYI/AAAAAAAAuYk/TSBqtwJgbr8UMmIEHrmIDqFn8gmpN4Q6QCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Tami.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-NEr3LeRoHAw/XdeAlY_-KYI/AAAAAAAAuYk/TSBqtwJgbr8UMmIEHrmIDqFn8gmpN4Q6QCLcBGAsYHQ/s1600/be_advent19_03_fp_mpp_Tami.gif" data-original-width="145" data-original-height="165" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-4.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec05() {
    ?>
    <p>
        <a href="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_10cards.gif" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_10cards.gif" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/tcg-advent-calendar-2019-siggie-2.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec06() {
    ?>
    <p>
        <img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_04_ee_euri.gif" />
    </p>
    <p>
        Tubes by: <a href="http://elfexpressions.com/" target="_blank">EE</a>.
    </p>
    <hr />
    <p>
        <a href="https://4.bp.blogspot.com/-oqyiOU1vlC0/XdeBE3cFxJI/AAAAAAAAuZE/RIOIrhyUXccFVgIDOdqvXtrulZoLWYNOACLcBGAsYHQ/s1600/be_advent19_04_ee_Annica.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-oqyiOU1vlC0/XdeBE3cFxJI/AAAAAAAAuZE/RIOIrhyUXccFVgIDOdqvXtrulZoLWYNOACLcBGAsYHQ/s1600/be_advent19_04_ee_Annica.gif" data-original-width="273" data-original-height="152" /></a><a href="https://2.bp.blogspot.com/-B7g7yhOCubY/XdeBE6WALZI/AAAAAAAAuZI/F4a6lWE-3rI8P896a2VHmItknV_SNFchgCLcBGAsYHQ/s1600/be_advent19_04_ee_Bella.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-B7g7yhOCubY/XdeBE6WALZI/AAAAAAAAuZI/F4a6lWE-3rI8P896a2VHmItknV_SNFchgCLcBGAsYHQ/s1600/be_advent19_04_ee_Bella.gif" data-original-width="273" data-original-height="152" /></a><a href="https://4.bp.blogspot.com/-eolWRDaQIJQ/XdeBFJ3GgsI/AAAAAAAAuZM/pfC5K2wV00giemNJQ58TJtLQf72_C3ZHQCLcBGAsYHQ/s1600/be_advent19_04_ee_Beth.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-eolWRDaQIJQ/XdeBFJ3GgsI/AAAAAAAAuZM/pfC5K2wV00giemNJQ58TJtLQf72_C3ZHQCLcBGAsYHQ/s1600/be_advent19_04_ee_Beth.gif" data-original-width="273" data-original-height="152" /></a><a href="https://4.bp.blogspot.com/-KlIGgdqXmGM/XdeBFpwqYjI/AAAAAAAAuZQ/08lyBZS7w4kVYbrH2Zbc8Dc8ChWzT3KMACLcBGAsYHQ/s1600/be_advent19_04_ee_Cris.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-KlIGgdqXmGM/XdeBFpwqYjI/AAAAAAAAuZQ/08lyBZS7w4kVYbrH2Zbc8Dc8ChWzT3KMACLcBGAsYHQ/s1600/be_advent19_04_ee_Cris.gif" data-original-width="273" data-original-height="152" /></a><a href="https://4.bp.blogspot.com/-s5ceOmzFV-Q/XdeBFzuLUtI/AAAAAAAAuZU/mj4yFVnlWfc_ZHizjHarV_iN8ghkxzR1QCLcBGAsYHQ/s1600/be_advent19_04_ee_Darlene.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-s5ceOmzFV-Q/XdeBFzuLUtI/AAAAAAAAuZU/mj4yFVnlWfc_ZHizjHarV_iN8ghkxzR1QCLcBGAsYHQ/s1600/be_advent19_04_ee_Darlene.gif" data-original-width="273" data-original-height="152" /></a><a href="https://2.bp.blogspot.com/-izXZplTNNDQ/XdeBGqCXabI/AAAAAAAAuZY/ZbqFc7PTIA4TGthOA3JQrjtbeVKQespkQCLcBGAsYHQ/s1600/be_advent19_04_ee_Heather.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-izXZplTNNDQ/XdeBGqCXabI/AAAAAAAAuZY/ZbqFc7PTIA4TGthOA3JQrjtbeVKQespkQCLcBGAsYHQ/s1600/be_advent19_04_ee_Heather.gif" data-original-width="273" data-original-height="152" /></a><a href="https://2.bp.blogspot.com/-sUwxQd_LouA/XdeBG320uxI/AAAAAAAAuZc/qL1PYPKX-XQz3ifW1ALLgHWW-HbFyHv9gCLcBGAsYHQ/s1600/be_advent19_04_ee_Inger.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-sUwxQd_LouA/XdeBG320uxI/AAAAAAAAuZc/qL1PYPKX-XQz3ifW1ALLgHWW-HbFyHv9gCLcBGAsYHQ/s1600/be_advent19_04_ee_Inger.gif" data-original-width="273" data-original-height="152" /></a><a href="https://1.bp.blogspot.com/-NJ9iy1vRp0g/XdeBHaQ90BI/AAAAAAAAuZg/Ox7bkxY5TLgSQL2gLEW9qIVZqk8nryGKwCLcBGAsYHQ/s1600/be_advent19_04_ee_Julie.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-NJ9iy1vRp0g/XdeBHaQ90BI/AAAAAAAAuZg/Ox7bkxY5TLgSQL2gLEW9qIVZqk8nryGKwCLcBGAsYHQ/s1600/be_advent19_04_ee_Julie.gif" data-original-width="273" data-original-height="152" /></a><a href="https://3.bp.blogspot.com/-SdZf_d6uMik/XdeBHUzorzI/AAAAAAAAuZk/p48wAwz-7rMNMUWTqFdnwgh1o0gjuv0mACLcBGAsYHQ/s1600/be_advent19_04_ee_Marcinha.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-SdZf_d6uMik/XdeBHUzorzI/AAAAAAAAuZk/p48wAwz-7rMNMUWTqFdnwgh1o0gjuv0mACLcBGAsYHQ/s1600/be_advent19_04_ee_Marcinha.gif" data-original-width="273" data-original-height="152" /></a><a href="https://4.bp.blogspot.com/-jo6nsX1CyEg/XdeBHzZo3nI/AAAAAAAAuZs/vtGTcxuCFogEP-8scR76ugfMomUWqGGNgCLcBGAsYHQ/s1600/be_advent19_04_ee_Mely.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-jo6nsX1CyEg/XdeBHzZo3nI/AAAAAAAAuZs/vtGTcxuCFogEP-8scR76ugfMomUWqGGNgCLcBGAsYHQ/s1600/be_advent19_04_ee_Mely.gif" data-original-width="273" data-original-height="152" /></a><a href="https://4.bp.blogspot.com/-KAcnPI3FY-c/XdeBH2zJa9I/AAAAAAAAuZo/Y6pgFZ6MBcoPd2CeU4jQJ8eKpZH8jDECgCLcBGAsYHQ/s1600/be_advent19_04_ee_Nicky.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-KAcnPI3FY-c/XdeBH2zJa9I/AAAAAAAAuZo/Y6pgFZ6MBcoPd2CeU4jQJ8eKpZH8jDECgCLcBGAsYHQ/s1600/be_advent19_04_ee_Nicky.gif" data-original-width="273" data-original-height="152" /></a><a href="https://1.bp.blogspot.com/-7GnQ6U78DLo/XdeBIRDI2-I/AAAAAAAAuZ4/A4FU5qIS_WEuIA46uDUCl0tGAHRcTwuogCLcBGAsYHQ/s1600/be_advent19_04_ee_Orella.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-7GnQ6U78DLo/XdeBIRDI2-I/AAAAAAAAuZ4/A4FU5qIS_WEuIA46uDUCl0tGAHRcTwuogCLcBGAsYHQ/s1600/be_advent19_04_ee_Orella.gif" data-original-width="273" data-original-height="152" /></a><a href="https://1.bp.blogspot.com/-arNoUvPM8iA/XdeBItIHFrI/AAAAAAAAuZw/7nTmncLAVVgPhav16wzD-4kReg1J1cyhgCLcBGAsYHQ/s1600/be_advent19_04_ee_Sylvia.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-arNoUvPM8iA/XdeBItIHFrI/AAAAAAAAuZw/7nTmncLAVVgPhav16wzD-4kReg1J1cyhgCLcBGAsYHQ/s1600/be_advent19_04_ee_Sylvia.gif" data-original-width="273" data-original-height="152" /></a><a href="https://1.bp.blogspot.com/-nQmHnS91bRA/XdeBJL8DOJI/AAAAAAAAuZ0/NbbgxeP2vD8JNi0vFRbMwOvKgMr2x0eagCLcBGAsYHQ/s1600/be_advent19_04_ee_Tami.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-nQmHnS91bRA/XdeBJL8DOJI/AAAAAAAAuZ0/NbbgxeP2vD8JNi0vFRbMwOvKgMr2x0eagCLcBGAsYHQ/s1600/be_advent19_04_ee_Tami.gif" data-original-width="273" data-original-height="152" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-6.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec07() {
    ?>
    <p>
        <a href="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_completeset.gif" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_completeset.gif" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/tcg-advent-calendar-2019-siggie-3.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec08() {
    ?>
    <p>
        <img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_05_fp_tp_euri.gif" />
    </p>
    <p>
        Tubes by: <a href="http://faerypixels.ca/" target="_blank">FP</a> &amp; <a href="http://tatipixel.com/" target="_blank">TP</a>.
    </p>
    <hr />
    <p>
        <a href="https://3.bp.blogspot.com/-9qMFfJdgfFo/XdeByArzbLI/AAAAAAAAuao/Dqi8xTKSWXkzkinhq3h9IHTC9KB55-4ngCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Annica.gif" imageanchor="1"><img border="0" data-original-height="181" data-original-width="148" src="https://3.bp.blogspot.com/-9qMFfJdgfFo/XdeByArzbLI/AAAAAAAAuao/Dqi8xTKSWXkzkinhq3h9IHTC9KB55-4ngCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Annica.gif" /></a><a href="https://4.bp.blogspot.com/-1rRuz89xRjU/XdeBx9lY-HI/AAAAAAAAuag/YiFhiP6fKgMKLfcJQ0upng_gAQ9HvVfgwCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Bella.gif" imageanchor="1"><img border="0" data-original-height="181" data-original-width="148" src="https://4.bp.blogspot.com/-1rRuz89xRjU/XdeBx9lY-HI/AAAAAAAAuag/YiFhiP6fKgMKLfcJQ0upng_gAQ9HvVfgwCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Bella.gif" /></a><a href="https://3.bp.blogspot.com/-i2V7ILqawu4/XdeBx4rgKiI/AAAAAAAAuak/wu1cqm0GL9M1EWPz5pAPEfOL4Bn-U0ZBACLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Beth.gif" imageanchor="1"><img border="0" data-original-height="181" data-original-width="148" src="https://3.bp.blogspot.com/-i2V7ILqawu4/XdeBx4rgKiI/AAAAAAAAuak/wu1cqm0GL9M1EWPz5pAPEfOL4Bn-U0ZBACLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Beth.gif" /></a><a href="https://2.bp.blogspot.com/-HZu9k0lmiF0/XdeBy5JtABI/AAAAAAAAuas/QkmBhLGZsQQVqivv3gX8q4VTjC-sks-mQCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Cris.gif" imageanchor="1"><img border="0" data-original-height="181" data-original-width="148" src="https://2.bp.blogspot.com/-HZu9k0lmiF0/XdeBy5JtABI/AAAAAAAAuas/QkmBhLGZsQQVqivv3gX8q4VTjC-sks-mQCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Cris.gif" /></a><a href="https://4.bp.blogspot.com/-1tDCJnd_Wiw/XdeBzELx8hI/AAAAAAAAuaw/iCMByXiV-4o_QS8x2w1SY_A9BxJrb_xlACLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Darlene.gif" imageanchor="1"><img border="0" data-original-height="181" data-original-width="148" src="https://4.bp.blogspot.com/-1tDCJnd_Wiw/XdeBzELx8hI/AAAAAAAAuaw/iCMByXiV-4o_QS8x2w1SY_A9BxJrb_xlACLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Darlene.gif" /></a><a href="https://2.bp.blogspot.com/-tGXsKTN3tw0/XdeBzrtgMgI/AAAAAAAAua0/04774iNiLE88erdDpMrBRjCmWq_L33yoQCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Heather.gif" imageanchor="1"><img border="0" data-original-height="181" data-original-width="148" src="https://2.bp.blogspot.com/-tGXsKTN3tw0/XdeBzrtgMgI/AAAAAAAAua0/04774iNiLE88erdDpMrBRjCmWq_L33yoQCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Heather.gif" /></a><a href="https://1.bp.blogspot.com/-dwpiYnOxfI0/XdeB0IU9DMI/AAAAAAAAua8/u2CNX9bQJf4rS2gPVta3ooL0LhLnaqPVgCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Inger.gif" imageanchor="1"><img border="0" data-original-height="181" data-original-width="148" src="https://1.bp.blogspot.com/-dwpiYnOxfI0/XdeB0IU9DMI/AAAAAAAAua8/u2CNX9bQJf4rS2gPVta3ooL0LhLnaqPVgCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Inger.gif" /></a><a href="https://2.bp.blogspot.com/-gW2hjlVAtt4/XdeBz1Y4kuI/AAAAAAAAua4/tGm2wfgHGo8b9Ae39PI6vnLxscVLsAbCgCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Julie.gif" imageanchor="1"><img border="0" data-original-height="181" data-original-width="148" src="https://2.bp.blogspot.com/-gW2hjlVAtt4/XdeBz1Y4kuI/AAAAAAAAua4/tGm2wfgHGo8b9Ae39PI6vnLxscVLsAbCgCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Julie.gif" /></a><a href="https://4.bp.blogspot.com/-DnO-UTvJqdo/XdeB0SCX97I/AAAAAAAAubA/HfyNPGEJY2Ma-k8FvfxYEnmKAjOBxESmgCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Marcinha.gif" imageanchor="1"><img border="0" data-original-height="181" data-original-width="148" src="https://4.bp.blogspot.com/-DnO-UTvJqdo/XdeB0SCX97I/AAAAAAAAubA/HfyNPGEJY2Ma-k8FvfxYEnmKAjOBxESmgCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Marcinha.gif" /></a><a href="https://2.bp.blogspot.com/-81qrZcIRi7k/XdeB0qd9hHI/AAAAAAAAubE/CAelawuSwtExNMNKc2rHxs9740wKmYXzQCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Mely.gif" imageanchor="1"><img border="0" data-original-height="181" data-original-width="148" src="https://2.bp.blogspot.com/-81qrZcIRi7k/XdeB0qd9hHI/AAAAAAAAubE/CAelawuSwtExNMNKc2rHxs9740wKmYXzQCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Mely.gif" /></a><a href="https://2.bp.blogspot.com/-wxAbxgXJvPE/XdeB1HlBh4I/AAAAAAAAubI/ma4nj-nPGMwS-ZbWwhpDtUrh7orBD4TiACLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Nicky.gif" imageanchor="1"><img border="0" data-original-height="181" data-original-width="148" src="https://2.bp.blogspot.com/-wxAbxgXJvPE/XdeB1HlBh4I/AAAAAAAAubI/ma4nj-nPGMwS-ZbWwhpDtUrh7orBD4TiACLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Nicky.gif" /></a><a href="https://1.bp.blogspot.com/-5aRNMMgM8Mk/XdeB1u3Bk-I/AAAAAAAAubM/ff0dUNRr_lgyvdDZjb6wGP6E-MQOqTjzwCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Orella.gif" imageanchor="1"><img border="0" data-original-height="181" data-original-width="148" src="https://1.bp.blogspot.com/-5aRNMMgM8Mk/XdeB1u3Bk-I/AAAAAAAAubM/ff0dUNRr_lgyvdDZjb6wGP6E-MQOqTjzwCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Orella.gif" /></a><a href="https://4.bp.blogspot.com/-LuSlPOwy3x0/XdeB1v54SSI/AAAAAAAAubQ/nIMATtd-CDMNPztnNHNFFnACdALKhCMcQCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Sylvia.gif" imageanchor="1"><img border="0" data-original-height="181" data-original-width="148" src="https://4.bp.blogspot.com/-LuSlPOwy3x0/XdeB1v54SSI/AAAAAAAAubQ/nIMATtd-CDMNPztnNHNFFnACdALKhCMcQCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Sylvia.gif" /></a><a href="https://1.bp.blogspot.com/-9UBJQ3iwHDo/XdeB1_Kre0I/AAAAAAAAubU/i60_G2wrXKcouxWO9k8bvl9fLvoRD2flgCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Tami.gif" imageanchor="1"><img border="0" data-original-height="181" data-original-width="148" src="https://1.bp.blogspot.com/-9UBJQ3iwHDo/XdeB1_Kre0I/AAAAAAAAubU/i60_G2wrXKcouxWO9k8bvl9fLvoRD2flgCLcBGAsYHQ/s1600/be_advent19_05_fp_tp_Tami.gif" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-8_8.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec09() {
    ?>
    <p>
        <a href="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_06.gif" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_06.gif" /></a>
        <a href="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_07.gif" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_07.gif" /></a>
        <a href="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_08.gif" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_08.gif" /></a>
        <a href="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_09.gif" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_09.gif" /></a>
        <a href="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_10.gif" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/wishcard_201912_euri_10.gif" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-9-non-tcg.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec10() {
    ?>
    <p>
        <a href="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_tubeset.gif" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_tubeset.gif" /></a>
    </p>
    <p>
        <strong>To claim your tube set:</strong><br />
        Go to <a href="https://beyondeternal.com/tubes" target="_blank">my pixel tube site</a> and pick any tube set you want.<br />
        Email me this certificate, and let me know which tube set you wanted.
    </p>
    <?php
}

function ac_dec11() {
    ?>
    <p>
        <img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_06_wa_euri.gif" />
    </p>
    <p>
        Tubes by: <a href="http://whimsyattic.net/" target="_blank">WA</a>.
    </p>
    <hr />
    <p>
        <a href="https://4.bp.blogspot.com/-dlsyI0l6HuE/Xdf-OQzjnFI/AAAAAAAAuc8/8AAZC6Lvj0s3WgHqSPxHjRRq0KjTl5QagCLcBGAsYHQ/s1600/be_advent19_06_wa_Annica.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-dlsyI0l6HuE/Xdf-OQzjnFI/AAAAAAAAuc8/8AAZC6Lvj0s3WgHqSPxHjRRq0KjTl5QagCLcBGAsYHQ/s1600/be_advent19_06_wa_Annica.gif" data-original-width="201" data-original-height="186" /></a><a href="https://2.bp.blogspot.com/-k_lKw02HjLQ/Xdf-OIY7caI/AAAAAAAAuc0/59qV_sZMzZsFPi5Kml9VmcYR0jZgQqPZQCLcBGAsYHQ/s1600/be_advent19_06_wa_Bella.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-k_lKw02HjLQ/Xdf-OIY7caI/AAAAAAAAuc0/59qV_sZMzZsFPi5Kml9VmcYR0jZgQqPZQCLcBGAsYHQ/s1600/be_advent19_06_wa_Bella.gif" data-original-width="201" data-original-height="186" /></a><a href="https://4.bp.blogspot.com/-VEaPsKlmPBY/Xdf-OQ2VCNI/AAAAAAAAuc4/IEEs71IcrdMRO_kYz5L23kF9SPlqssrNACLcBGAsYHQ/s1600/be_advent19_06_wa_Beth.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-VEaPsKlmPBY/Xdf-OQ2VCNI/AAAAAAAAuc4/IEEs71IcrdMRO_kYz5L23kF9SPlqssrNACLcBGAsYHQ/s1600/be_advent19_06_wa_Beth.gif" data-original-width="201" data-original-height="186" /></a><a href="https://4.bp.blogspot.com/-ys342P4A1rg/Xdf-PIz90AI/AAAAAAAAudA/MdaK93u0jEwO2uExmxObjlyTBD5ozCx8ACLcBGAsYHQ/s1600/be_advent19_06_wa_Cris.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-ys342P4A1rg/Xdf-PIz90AI/AAAAAAAAudA/MdaK93u0jEwO2uExmxObjlyTBD5ozCx8ACLcBGAsYHQ/s1600/be_advent19_06_wa_Cris.gif" data-original-width="201" data-original-height="186" /></a><a href="https://1.bp.blogspot.com/-en4fV5IExGA/Xdf-PVWeb0I/AAAAAAAAudE/Rx862Dzmx1MGFv075I2gIZJmTIxO-0njgCLcBGAsYHQ/s1600/be_advent19_06_wa_Darlene.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-en4fV5IExGA/Xdf-PVWeb0I/AAAAAAAAudE/Rx862Dzmx1MGFv075I2gIZJmTIxO-0njgCLcBGAsYHQ/s1600/be_advent19_06_wa_Darlene.gif" data-original-width="201" data-original-height="186" /></a><a href="https://2.bp.blogspot.com/-BQMEk166-nE/Xdf-P9L22oI/AAAAAAAAudI/Dox8sNRWgvo10m61WbFX5YzTw5g5ASrTwCLcBGAsYHQ/s1600/be_advent19_06_wa_Heather.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-BQMEk166-nE/Xdf-P9L22oI/AAAAAAAAudI/Dox8sNRWgvo10m61WbFX5YzTw5g5ASrTwCLcBGAsYHQ/s1600/be_advent19_06_wa_Heather.gif" data-original-width="201" data-original-height="186" /></a><a href="https://3.bp.blogspot.com/-o1X_UFv36HU/Xdf-QCVyKsI/AAAAAAAAudM/0lJ1blmXV0c1qGYbM8ysqibrRQEr9hLmwCLcBGAsYHQ/s1600/be_advent19_06_wa_Inger.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-o1X_UFv36HU/Xdf-QCVyKsI/AAAAAAAAudM/0lJ1blmXV0c1qGYbM8ysqibrRQEr9hLmwCLcBGAsYHQ/s1600/be_advent19_06_wa_Inger.gif" data-original-width="201" data-original-height="186" /></a><a href="https://4.bp.blogspot.com/-M0M1DLFVoiQ/Xdf-QZQEk2I/AAAAAAAAudQ/njakKjwT-n4cv-Bjm38S_RPTjzlgCZr-gCLcBGAsYHQ/s1600/be_advent19_06_wa_Julie.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-M0M1DLFVoiQ/Xdf-QZQEk2I/AAAAAAAAudQ/njakKjwT-n4cv-Bjm38S_RPTjzlgCZr-gCLcBGAsYHQ/s1600/be_advent19_06_wa_Julie.gif" data-original-width="201" data-original-height="186" /></a><a href="https://4.bp.blogspot.com/-6pNxjhsmVok/Xdf-Q4JKzkI/AAAAAAAAudU/DjQJiHJNtjo0724rrDulQulFYJ_TxFQ9gCLcBGAsYHQ/s1600/be_advent19_06_wa_Marcinha.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-6pNxjhsmVok/Xdf-Q4JKzkI/AAAAAAAAudU/DjQJiHJNtjo0724rrDulQulFYJ_TxFQ9gCLcBGAsYHQ/s1600/be_advent19_06_wa_Marcinha.gif" data-original-width="201" data-original-height="186" /></a><a href="https://3.bp.blogspot.com/-UjKz1IIAE3g/Xdf-RWwVniI/AAAAAAAAudY/zbvXoGYGawI1LzgOYCqcwXSN2R8PNeWSwCLcBGAsYHQ/s1600/be_advent19_06_wa_Mely.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-UjKz1IIAE3g/Xdf-RWwVniI/AAAAAAAAudY/zbvXoGYGawI1LzgOYCqcwXSN2R8PNeWSwCLcBGAsYHQ/s1600/be_advent19_06_wa_Mely.gif" data-original-width="201" data-original-height="186" /></a><a href="https://1.bp.blogspot.com/-KRfFluUE5Sc/Xdf-RWYXOJI/AAAAAAAAudc/sS9FfE_impUF573jHMFpEr74bQ-e1QaHgCLcBGAsYHQ/s1600/be_advent19_06_wa_Nicky.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-KRfFluUE5Sc/Xdf-RWYXOJI/AAAAAAAAudc/sS9FfE_impUF573jHMFpEr74bQ-e1QaHgCLcBGAsYHQ/s1600/be_advent19_06_wa_Nicky.gif" data-original-width="201" data-original-height="186" /></a><a href="https://3.bp.blogspot.com/-gEmA1GbUlcA/Xdf-R8pjhyI/AAAAAAAAudg/s7LhEmJX45EDaK5BEyNWj7DcjjmBuWpLACLcBGAsYHQ/s1600/be_advent19_06_wa_Orella.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-gEmA1GbUlcA/Xdf-R8pjhyI/AAAAAAAAudg/s7LhEmJX45EDaK5BEyNWj7DcjjmBuWpLACLcBGAsYHQ/s1600/be_advent19_06_wa_Orella.gif" data-original-width="201" data-original-height="186" /></a><a href="https://3.bp.blogspot.com/-fZr30P4p0PU/Xdf-SkrpMZI/AAAAAAAAudk/sHltljxDoMAJcR2c08-AgT7rWfc5tYGRQCLcBGAsYHQ/s1600/be_advent19_06_wa_Sylvia.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-fZr30P4p0PU/Xdf-SkrpMZI/AAAAAAAAudk/sHltljxDoMAJcR2c08-AgT7rWfc5tYGRQCLcBGAsYHQ/s1600/be_advent19_06_wa_Sylvia.gif" data-original-width="201" data-original-height="186" /></a><a href="https://4.bp.blogspot.com/-mLb2G1HSwR8/Xdf-Si-HfcI/AAAAAAAAudo/M2noXnADelcWurb7jUL8XW6T2QEwhWtEQCLcBGAsYHQ/s1600/be_advent19_06_wa_Tami.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-mLb2G1HSwR8/Xdf-Si-HfcI/AAAAAAAAudo/M2noXnADelcWurb7jUL8XW6T2QEwhWtEQCLcBGAsYHQ/s1600/be_advent19_06_wa_Tami.gif" data-original-width="201" data-original-height="186" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-11.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec12() {
    ?>
    <p>
        <img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_07_md_mmc_euri.gif" />
    </p>
    <p>
        Tubes by: <a href="http://mydoodles.info/" target="_blank">MD</a>, MMC (closed).
    </p>
    <hr />
    <p>
        <a href="https://1.bp.blogspot.com/-d1_6SVU1qIw/Xdf-qwhhT_I/AAAAAAAAueE/Iki0F71XjJcIDX13VH2mAXJq9mCOc48EQCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Annica.gif" imageanchor="1"><img border="0" data-original-height="144" data-original-width="192" src="https://1.bp.blogspot.com/-d1_6SVU1qIw/Xdf-qwhhT_I/AAAAAAAAueE/Iki0F71XjJcIDX13VH2mAXJq9mCOc48EQCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Annica.gif" /></a><a href="https://1.bp.blogspot.com/--asrG8twFNo/Xdf-q-RxjyI/AAAAAAAAueI/hf6ig_3NdHQzdp1flivgHLL7YyrtLsSQQCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Bella.gif" imageanchor="1"><img border="0" data-original-height="144" data-original-width="192" src="https://1.bp.blogspot.com/--asrG8twFNo/Xdf-q-RxjyI/AAAAAAAAueI/hf6ig_3NdHQzdp1flivgHLL7YyrtLsSQQCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Bella.gif" /></a><a href="https://3.bp.blogspot.com/-c3ZRQeAEEsQ/Xdf-q9kwkkI/AAAAAAAAueM/-OSiKi8GANAToB6yW6ewhZYILw2r3-99QCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Beth.gif" imageanchor="1"><img border="0" data-original-height="144" data-original-width="192" src="https://3.bp.blogspot.com/-c3ZRQeAEEsQ/Xdf-q9kwkkI/AAAAAAAAueM/-OSiKi8GANAToB6yW6ewhZYILw2r3-99QCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Beth.gif" /></a><a href="https://1.bp.blogspot.com/-XdG8Sw-ucbs/Xdf-rj47YWI/AAAAAAAAueQ/8qIsOsWdszQmUBI_Qll-aZXVtlL0gw3DACLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Cris.gif" imageanchor="1"><img border="0" data-original-height="144" data-original-width="192" src="https://1.bp.blogspot.com/-XdG8Sw-ucbs/Xdf-rj47YWI/AAAAAAAAueQ/8qIsOsWdszQmUBI_Qll-aZXVtlL0gw3DACLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Cris.gif" /></a><a href="https://2.bp.blogspot.com/-JW7BwLq6O50/Xdf-saHXtNI/AAAAAAAAueU/mIEbdHkhCbQd7wDg5GllaMM0qD5ViF7OACLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Darlene.gif" imageanchor="1"><img border="0" data-original-height="144" data-original-width="192" src="https://2.bp.blogspot.com/-JW7BwLq6O50/Xdf-saHXtNI/AAAAAAAAueU/mIEbdHkhCbQd7wDg5GllaMM0qD5ViF7OACLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Darlene.gif" /></a><a href="https://3.bp.blogspot.com/-42dAuKZXmt8/Xdf-siqyt8I/AAAAAAAAueY/UnbxXWiu0UQyWB_1RgLMQO9wIW3Pe4dDACLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Heather.gif" imageanchor="1"><img border="0" data-original-height="144" data-original-width="192" src="https://3.bp.blogspot.com/-42dAuKZXmt8/Xdf-siqyt8I/AAAAAAAAueY/UnbxXWiu0UQyWB_1RgLMQO9wIW3Pe4dDACLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Heather.gif" /></a><a href="https://4.bp.blogspot.com/-JvQ3su97GFo/Xdf-sySNAQI/AAAAAAAAuec/nW-2fv1H_ZEM7nStYtMzETGCcIu8lhbDgCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Inger.gif" imageanchor="1"><img border="0" data-original-height="144" data-original-width="192" src="https://4.bp.blogspot.com/-JvQ3su97GFo/Xdf-sySNAQI/AAAAAAAAuec/nW-2fv1H_ZEM7nStYtMzETGCcIu8lhbDgCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Inger.gif" /></a><a href="https://4.bp.blogspot.com/-YJb0z8-pNLg/Xdf-tXqK4vI/AAAAAAAAueg/1hSWXK5nYsoyHzeBsKdfeZCmV5wEloQ0QCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Julie.gif" imageanchor="1"><img border="0" data-original-height="144" data-original-width="192" src="https://4.bp.blogspot.com/-YJb0z8-pNLg/Xdf-tXqK4vI/AAAAAAAAueg/1hSWXK5nYsoyHzeBsKdfeZCmV5wEloQ0QCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Julie.gif" /></a><a href="https://4.bp.blogspot.com/-T7tSSwru1Fc/Xdf-tnkx3cI/AAAAAAAAuek/bzBQ7O6tdekmpBbHAcNdAwupSonCFEu7wCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Marcinha.gif" imageanchor="1"><img border="0" data-original-height="144" data-original-width="192" src="https://4.bp.blogspot.com/-T7tSSwru1Fc/Xdf-tnkx3cI/AAAAAAAAuek/bzBQ7O6tdekmpBbHAcNdAwupSonCFEu7wCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Marcinha.gif" /></a><a href="https://1.bp.blogspot.com/-uKEwXKr8yH4/Xdf-tz6gyAI/AAAAAAAAueo/VLomP1vn3rg2MRf1xC3ito3iubANq4snwCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Mely.gif" imageanchor="1"><img border="0" data-original-height="144" data-original-width="192" src="https://1.bp.blogspot.com/-uKEwXKr8yH4/Xdf-tz6gyAI/AAAAAAAAueo/VLomP1vn3rg2MRf1xC3ito3iubANq4snwCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Mely.gif" /></a><a href="https://4.bp.blogspot.com/-dAfn5PnABxs/Xdf-unDZQKI/AAAAAAAAues/pnE6yoJgNP0S90Hr1gRhao6KV-iCt4dQgCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Nicky.gif" imageanchor="1"><img border="0" data-original-height="144" data-original-width="192" src="https://4.bp.blogspot.com/-dAfn5PnABxs/Xdf-unDZQKI/AAAAAAAAues/pnE6yoJgNP0S90Hr1gRhao6KV-iCt4dQgCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Nicky.gif" /></a><a href="https://2.bp.blogspot.com/-pQwCxHYKtBY/Xdf-utWG75I/AAAAAAAAuew/ho7Mdqy7Pkkb9lIa8JG8jZpklwk0AR_sQCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Orella.gif" imageanchor="1"><img border="0" data-original-height="144" data-original-width="192" src="https://2.bp.blogspot.com/-pQwCxHYKtBY/Xdf-utWG75I/AAAAAAAAuew/ho7Mdqy7Pkkb9lIa8JG8jZpklwk0AR_sQCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Orella.gif" /></a><a href="https://2.bp.blogspot.com/-Yg0H5Hbk2Dc/Xdf-uz3F4BI/AAAAAAAAue0/6yaPNQoVfTAB9jdnGUoYQY51NgDpWaUNQCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Sylvia.gif" imageanchor="1"><img border="0" data-original-height="144" data-original-width="192" src="https://2.bp.blogspot.com/-Yg0H5Hbk2Dc/Xdf-uz3F4BI/AAAAAAAAue0/6yaPNQoVfTAB9jdnGUoYQY51NgDpWaUNQCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Sylvia.gif" /></a><a href="https://2.bp.blogspot.com/-DLUefdI6nrA/Xdf-vukB8NI/AAAAAAAAue4/7G2sCrVY4Ewm2NR3tx6-MEOHGXtJHMspwCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Tami.gif" imageanchor="1"><img border="0" data-original-height="144" data-original-width="192" src="https://2.bp.blogspot.com/-DLUefdI6nrA/Xdf-vukB8NI/AAAAAAAAue4/7G2sCrVY4Ewm2NR3tx6-MEOHGXtJHMspwCLcBGAsYHQ/s1600/be_advent19_07_md_mmc_Tami.gif" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-12.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec13() {
    ?>
    <p>
        <img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_08_md_tp_euri.gif" />
    </p>
    <p>
        Tubes by: <a href="http://mydoodles.info/" target="_blank">MD</a>, <a href="http://tatipixel.com/" target="_blank">TP</a>.
    </p>
    <hr />
    <p>
        <a href="https://1.bp.blogspot.com/-4xO3d5n1bts/Xdf_Oh3JRuI/AAAAAAAAufc/be1GGczTOMc19KbZ5e6c1vQrTGoxcx3PQCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Annica.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-4xO3d5n1bts/Xdf_Oh3JRuI/AAAAAAAAufc/be1GGczTOMc19KbZ5e6c1vQrTGoxcx3PQCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Annica.gif" data-original-width="271" data-original-height="255" /></a><a href="https://4.bp.blogspot.com/-O0kth8-4u4w/Xdf_OWXzT0I/AAAAAAAAufU/xTipQweO6vQCSabwbgm16WvMUXXAU2UUQCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Bella.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-O0kth8-4u4w/Xdf_OWXzT0I/AAAAAAAAufU/xTipQweO6vQCSabwbgm16WvMUXXAU2UUQCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Bella.gif" data-original-width="271" data-original-height="255" /></a><a href="https://4.bp.blogspot.com/-uuaHFJhCF_I/Xdf_OS55EJI/AAAAAAAAufY/WcpkzCpjN6Uj5GxaTeMzA2qmb_PaZlEUACLcBGAsYHQ/s1600/be_advent19_08_md_tp_Beth.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-uuaHFJhCF_I/Xdf_OS55EJI/AAAAAAAAufY/WcpkzCpjN6Uj5GxaTeMzA2qmb_PaZlEUACLcBGAsYHQ/s1600/be_advent19_08_md_tp_Beth.gif" data-original-width="271" data-original-height="255" /></a><a href="https://2.bp.blogspot.com/-brPoVVAzXLs/Xdf_PQWLczI/AAAAAAAAufg/PhddOizliMMD3ZbhiWdzly8XOErvgtkEgCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Cris.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-brPoVVAzXLs/Xdf_PQWLczI/AAAAAAAAufg/PhddOizliMMD3ZbhiWdzly8XOErvgtkEgCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Cris.gif" data-original-width="271" data-original-height="255" /></a><a href="https://4.bp.blogspot.com/-1DtE4Hmla0k/Xdf_P0cRtZI/AAAAAAAAufk/6xKimgD-KPAMmS4f-fFPbw2Dziy0LrJrwCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Darlene.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-1DtE4Hmla0k/Xdf_P0cRtZI/AAAAAAAAufk/6xKimgD-KPAMmS4f-fFPbw2Dziy0LrJrwCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Darlene.gif" data-original-width="271" data-original-height="255" /></a><a href="https://3.bp.blogspot.com/-zjr17by8sl8/Xdf_QFKjVuI/AAAAAAAAufo/wnHdanEjAAEbpj56CPVRx8Sz2HReUjR5QCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Heather.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-zjr17by8sl8/Xdf_QFKjVuI/AAAAAAAAufo/wnHdanEjAAEbpj56CPVRx8Sz2HReUjR5QCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Heather.gif" data-original-width="271" data-original-height="255" /></a><a href="https://1.bp.blogspot.com/-0aC3ntb9cro/Xdf_Qfh8YiI/AAAAAAAAufs/ALB7U4vRd34ib-VDlO_KHiBG_tyxcjrxgCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Inger.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-0aC3ntb9cro/Xdf_Qfh8YiI/AAAAAAAAufs/ALB7U4vRd34ib-VDlO_KHiBG_tyxcjrxgCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Inger.gif" data-original-width="271" data-original-height="255" /></a><a href="https://1.bp.blogspot.com/-fS_XM08G03Y/Xdf_QnVbytI/AAAAAAAAufw/NqBPoDMviEsQIBiPJgiMOo0XTBiIhMJfwCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Julie.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-fS_XM08G03Y/Xdf_QnVbytI/AAAAAAAAufw/NqBPoDMviEsQIBiPJgiMOo0XTBiIhMJfwCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Julie.gif" data-original-width="271" data-original-height="255" /></a><a href="https://2.bp.blogspot.com/-CAfsr13zNFk/Xdf_RH8NCZI/AAAAAAAAuf0/2Z7gAbtYVEQWLh1WNVSBBohTNRkn5kaugCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Marcinha.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-CAfsr13zNFk/Xdf_RH8NCZI/AAAAAAAAuf0/2Z7gAbtYVEQWLh1WNVSBBohTNRkn5kaugCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Marcinha.gif" data-original-width="271" data-original-height="255" /></a><a href="https://1.bp.blogspot.com/-6Tt3zRxFWx0/Xdf_RjVwHOI/AAAAAAAAuf4/f4jstE_CLdsb2eWpBV-OjxJbT9CjC45EACLcBGAsYHQ/s1600/be_advent19_08_md_tp_Mely.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-6Tt3zRxFWx0/Xdf_RjVwHOI/AAAAAAAAuf4/f4jstE_CLdsb2eWpBV-OjxJbT9CjC45EACLcBGAsYHQ/s1600/be_advent19_08_md_tp_Mely.gif" data-original-width="271" data-original-height="255" /></a><a href="https://1.bp.blogspot.com/-5nSCypceb94/Xdf_R9C1ahI/AAAAAAAAuf8/kexBUxIisBQ8mnkPvRCCrXfmpRoxLgu3QCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Nicky.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-5nSCypceb94/Xdf_R9C1ahI/AAAAAAAAuf8/kexBUxIisBQ8mnkPvRCCrXfmpRoxLgu3QCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Nicky.gif" data-original-width="271" data-original-height="255" /></a><a href="https://1.bp.blogspot.com/-5VGy3t6EN68/Xdf_SESGpLI/AAAAAAAAugA/Muej5shDsLkIpaFH00QNuj7XXVXjvb3DQCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Orella.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-5VGy3t6EN68/Xdf_SESGpLI/AAAAAAAAugA/Muej5shDsLkIpaFH00QNuj7XXVXjvb3DQCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Orella.gif" data-original-width="271" data-original-height="255" /></a><a href="https://3.bp.blogspot.com/-vI6sAMp9LiU/Xdf_ShFtcXI/AAAAAAAAugE/WmSjGX91l3o6X7phlvwWVIGK0okyjN3bACLcBGAsYHQ/s1600/be_advent19_08_md_tp_Sylvia.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-vI6sAMp9LiU/Xdf_ShFtcXI/AAAAAAAAugE/WmSjGX91l3o6X7phlvwWVIGK0okyjN3bACLcBGAsYHQ/s1600/be_advent19_08_md_tp_Sylvia.gif" data-original-width="271" data-original-height="255" /></a><a href="https://2.bp.blogspot.com/-JCV09dPrkR4/Xdf_S23vqQI/AAAAAAAAugI/pmpuQ2wmBYkHJyj8zYyW6Zmuon1y3pAVgCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Tami.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-JCV09dPrkR4/Xdf_S23vqQI/AAAAAAAAugI/pmpuQ2wmBYkHJyj8zYyW6Zmuon1y3pAVgCLcBGAsYHQ/s1600/be_advent19_08_md_tp_Tami.gif" data-original-width="271" data-original-height="255" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-13.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec14() {
    ?>
    <p>
        <a href="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_10cards2.gif" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_10cards2.gif" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-14-non-tcg.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec15() {
    ?>
    <p>
        <img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_09_md_fpd_euri.gif" />
    </p>
    <p>
        Tubes by: <a href="http://mydoodles.info/" target="_blank">MD</a>, <a href="https://www.fantasticpixeldreams.at/pixelsite/fpd/index.htm" target="_blank">FPD</a>.
    </p>
    <hr />
    <p>
        <a href="https://4.bp.blogspot.com/-mSnR1y83REs/Xdf__E0ap4I/AAAAAAAAug0/pvzZdHsaPUg99ize89w63giHzkVcq0PRgCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Annica.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-mSnR1y83REs/Xdf__E0ap4I/AAAAAAAAug0/pvzZdHsaPUg99ize89w63giHzkVcq0PRgCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Annica.gif" data-original-width="244" data-original-height="245" /></a><a href="https://3.bp.blogspot.com/-PVnDhFEUWCI/Xdf__Dk8CDI/AAAAAAAAugs/bajlYHquj-0podXGUD4N0Tyc-5Ti0kvXQCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Bella.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-PVnDhFEUWCI/Xdf__Dk8CDI/AAAAAAAAugs/bajlYHquj-0podXGUD4N0Tyc-5Ti0kvXQCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Bella.gif" data-original-width="244" data-original-height="245" /></a><a href="https://4.bp.blogspot.com/-E7mN_Nwbf34/Xdf__PeXoTI/AAAAAAAAugw/pbAyrH7RFycQMSC_02UIk0p6obSgRczrwCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Beth.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-E7mN_Nwbf34/Xdf__PeXoTI/AAAAAAAAugw/pbAyrH7RFycQMSC_02UIk0p6obSgRczrwCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Beth.gif" data-original-width="244" data-original-height="245" /></a><a href="https://1.bp.blogspot.com/-CVeCrm4BV1g/XdgAAZfn22I/AAAAAAAAug4/1kLRwlm_puE_NSxIxGq2RHrBXlnKAJlZwCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Cris.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-CVeCrm4BV1g/XdgAAZfn22I/AAAAAAAAug4/1kLRwlm_puE_NSxIxGq2RHrBXlnKAJlZwCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Cris.gif" data-original-width="244" data-original-height="245" /></a><a href="https://1.bp.blogspot.com/-4wk3U9OH4gA/XdgAAyFI3NI/AAAAAAAAug8/dRWqv6llmqUQYpQx-HyYXKRvb_9bceGfwCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Darlene.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-4wk3U9OH4gA/XdgAAyFI3NI/AAAAAAAAug8/dRWqv6llmqUQYpQx-HyYXKRvb_9bceGfwCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Darlene.gif" data-original-width="244" data-original-height="245" /></a><a href="https://4.bp.blogspot.com/-xyAAA261W-Q/XdgABLKx7vI/AAAAAAAAuhA/KRY8Cy_lP_AS-Wz_XmNeowufH3NIdE-ZQCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Heather.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-xyAAA261W-Q/XdgABLKx7vI/AAAAAAAAuhA/KRY8Cy_lP_AS-Wz_XmNeowufH3NIdE-ZQCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Heather.gif" data-original-width="244" data-original-height="245" /></a><a href="https://2.bp.blogspot.com/-v3nHC9PiwGY/XdgABdgDNRI/AAAAAAAAuhE/Fal2_X6IPg8iUtT4_XUnYqjyM2fFX2AegCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Inger.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-v3nHC9PiwGY/XdgABdgDNRI/AAAAAAAAuhE/Fal2_X6IPg8iUtT4_XUnYqjyM2fFX2AegCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Inger.gif" data-original-width="244" data-original-height="245" /></a><a href="https://4.bp.blogspot.com/-ea7hBTGsa8o/XdgACAetBAI/AAAAAAAAuhI/nkhFUv9XJRMTjPUiQSrSO6vLKTHUAvOywCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Julie.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-ea7hBTGsa8o/XdgACAetBAI/AAAAAAAAuhI/nkhFUv9XJRMTjPUiQSrSO6vLKTHUAvOywCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Julie.gif" data-original-width="244" data-original-height="245" /></a><a href="https://2.bp.blogspot.com/-8RNpwU5Zeus/XdgACLu5LYI/AAAAAAAAuhM/8pHOoVjVJVYs2aYxlTMgKJkzwtskBHVkwCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Marcinha.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-8RNpwU5Zeus/XdgACLu5LYI/AAAAAAAAuhM/8pHOoVjVJVYs2aYxlTMgKJkzwtskBHVkwCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Marcinha.gif" data-original-width="244" data-original-height="245" /></a><a href="https://1.bp.blogspot.com/-wB2uzdn0BDk/XdgACScJ9aI/AAAAAAAAuhQ/iozSmSzzA7sJY-KNptV6YbGcSo8NeOqTwCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Mely.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-wB2uzdn0BDk/XdgACScJ9aI/AAAAAAAAuhQ/iozSmSzzA7sJY-KNptV6YbGcSo8NeOqTwCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Mely.gif" data-original-width="244" data-original-height="245" /></a><a href="https://2.bp.blogspot.com/-qvDTZd7yiUQ/XdgAC_PHUTI/AAAAAAAAuhU/-dPg5F9j3bM3zPPDerJ9wz3z9jS7DAZ-ACLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Nicky.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-qvDTZd7yiUQ/XdgAC_PHUTI/AAAAAAAAuhU/-dPg5F9j3bM3zPPDerJ9wz3z9jS7DAZ-ACLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Nicky.gif" data-original-width="244" data-original-height="245" /></a><a href="https://2.bp.blogspot.com/-lVmMp_z-mHU/XdgADW90_fI/AAAAAAAAuhY/jAlEriYwigwFgaqlBK16-wKmtMjQK22MACLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Orella.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-lVmMp_z-mHU/XdgADW90_fI/AAAAAAAAuhY/jAlEriYwigwFgaqlBK16-wKmtMjQK22MACLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Orella.gif" data-original-width="244" data-original-height="245" /></a><a href="https://4.bp.blogspot.com/-Y-o71UIHv_U/XdgADjGbowI/AAAAAAAAuhc/Yju7pbPwJxMIB7XWxqlAdZSl2ThUtuSKwCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Sylvia.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-Y-o71UIHv_U/XdgADjGbowI/AAAAAAAAuhc/Yju7pbPwJxMIB7XWxqlAdZSl2ThUtuSKwCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Sylvia.gif" data-original-width="244" data-original-height="245" /></a><a href="https://4.bp.blogspot.com/--7jZUQXTcfU/XdgAD42DC7I/AAAAAAAAuhg/dR3SiPiFyKYrJzOdH0thehRYOgoVGKKRQCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Tami.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/--7jZUQXTcfU/XdgAD42DC7I/AAAAAAAAuhg/dR3SiPiFyKYrJzOdH0thehRYOgoVGKKRQCLcBGAsYHQ/s1600/be_advent19_09_md_fpd_Tami.gif" data-original-width="244" data-original-height="245" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-15.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec16() {
    ?>
    <p>
        <img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_10_ta_wa_tp_euri.gif" />
    </p>
    <p>
        Tubes by: <a href="northern-lightz.com/simember/" target="_blank">MPP</a>, <a href="http://whimsyattic.net/" target="_blank">WA</a>, <a href="http://www.tatipixel.com/" target="_blank">TP</a>.
    </p>
    <hr />
    <p>
        <a href="https://3.bp.blogspot.com/-4c0wQrEmdvU/Xdj-nAbeUII/AAAAAAAAujY/Un0YIGpYGUwzwv87wKnoI1Uwa1aitIXtwCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Annica.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-4c0wQrEmdvU/Xdj-nAbeUII/AAAAAAAAujY/Un0YIGpYGUwzwv87wKnoI1Uwa1aitIXtwCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Annica.gif" data-original-width="97" data-original-height="125" /></a><a href="https://3.bp.blogspot.com/-fBgm0nDbxyU/Xdj-m8GR7vI/AAAAAAAAujU/flazqZpl8HYe_ZLejJBxCuxC-2WO0WsUQCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Bella.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-fBgm0nDbxyU/Xdj-m8GR7vI/AAAAAAAAujU/flazqZpl8HYe_ZLejJBxCuxC-2WO0WsUQCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Bella.gif" data-original-width="97" data-original-height="125" /></a><a href="https://3.bp.blogspot.com/-CBiiMT_VJGE/Xdj-m7cN2ZI/AAAAAAAAujQ/9ov-7dwPSn04f4HhsYe895C40pebv76_ACLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Beth.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-CBiiMT_VJGE/Xdj-m7cN2ZI/AAAAAAAAujQ/9ov-7dwPSn04f4HhsYe895C40pebv76_ACLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Beth.gif" data-original-width="97" data-original-height="125" /></a><a href="https://2.bp.blogspot.com/-7bIymANdpU0/Xdj-oDd6L6I/AAAAAAAAujc/0Vpsq_FW11g6BKYk40DE1l5Ki7uVPQGxwCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Cris.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-7bIymANdpU0/Xdj-oDd6L6I/AAAAAAAAujc/0Vpsq_FW11g6BKYk40DE1l5Ki7uVPQGxwCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Cris.gif" data-original-width="97" data-original-height="125" /></a><a href="https://4.bp.blogspot.com/-argzVNPPHX4/Xdj-oPxsIII/AAAAAAAAujg/oT9qiSIkS9Qe4uK-Ps1lcvNfouXjwC9BQCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Darlene.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-argzVNPPHX4/Xdj-oPxsIII/AAAAAAAAujg/oT9qiSIkS9Qe4uK-Ps1lcvNfouXjwC9BQCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Darlene.gif" data-original-width="97" data-original-height="125" /></a><a href="https://3.bp.blogspot.com/-71mAt3ipvsY/Xdj-oA6rahI/AAAAAAAAujk/6SOifaTwX5021xV2Cz5Vx_tOAauP6qstQCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Heather.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-71mAt3ipvsY/Xdj-oA6rahI/AAAAAAAAujk/6SOifaTwX5021xV2Cz5Vx_tOAauP6qstQCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Heather.gif" data-original-width="97" data-original-height="125" /></a><a href="https://4.bp.blogspot.com/-fIQSWuHjlIM/Xdj-pLGwblI/AAAAAAAAujo/NJxboP8IKu0unuCz3hLSg3rSrsjrTLXNgCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Inger.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-fIQSWuHjlIM/Xdj-pLGwblI/AAAAAAAAujo/NJxboP8IKu0unuCz3hLSg3rSrsjrTLXNgCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Inger.gif" data-original-width="97" data-original-height="125" /></a><a href="https://3.bp.blogspot.com/-NufS281aV6A/Xdj-pR48HPI/AAAAAAAAujs/V-ilqwNsXekHi28LgkXu9EpqXSnHDGFTwCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Julie.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-NufS281aV6A/Xdj-pR48HPI/AAAAAAAAujs/V-ilqwNsXekHi28LgkXu9EpqXSnHDGFTwCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Julie.gif" data-original-width="97" data-original-height="125" /></a><a href="https://2.bp.blogspot.com/-4tLgPxT2d2I/Xdj-przHj9I/AAAAAAAAujw/9lapiDbZEI4zGM7RXzb70FcA60-iEBBuwCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Marcinha.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-4tLgPxT2d2I/Xdj-przHj9I/AAAAAAAAujw/9lapiDbZEI4zGM7RXzb70FcA60-iEBBuwCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Marcinha.gif" data-original-width="97" data-original-height="125" /></a><a href="https://1.bp.blogspot.com/-vLiPoC-6e5Y/Xdj-p-EgpFI/AAAAAAAAuj0/Qhd4uFGnSkQIcw4h9E7904dC7hV-I7gmQCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Mely.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-vLiPoC-6e5Y/Xdj-p-EgpFI/AAAAAAAAuj0/Qhd4uFGnSkQIcw4h9E7904dC7hV-I7gmQCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Mely.gif" data-original-width="97" data-original-height="125" /></a><a href="https://1.bp.blogspot.com/-J7PqyufT7Ic/Xdj-qbGe2sI/AAAAAAAAuj4/gDv0XUKXmnY5bjmqtbSuJJbsTzdzVf32QCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Nicky.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-J7PqyufT7Ic/Xdj-qbGe2sI/AAAAAAAAuj4/gDv0XUKXmnY5bjmqtbSuJJbsTzdzVf32QCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Nicky.gif" data-original-width="97" data-original-height="125" /></a><a href="https://1.bp.blogspot.com/-P2DstaW3BJg/Xdj-qipDJKI/AAAAAAAAuj8/fBcd7vU74ecnaqpyXEHdhkjxP0fgMpB7wCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Orella.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-P2DstaW3BJg/Xdj-qipDJKI/AAAAAAAAuj8/fBcd7vU74ecnaqpyXEHdhkjxP0fgMpB7wCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Orella.gif" data-original-width="97" data-original-height="125" /></a><a href="https://3.bp.blogspot.com/-7ayG-fL8Ylo/Xdj-qwJFdLI/AAAAAAAAukA/ZW5fdOCq6SExp6af8mDDOm_J-q4IUTEYgCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Sylvia.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-7ayG-fL8Ylo/Xdj-qwJFdLI/AAAAAAAAukA/ZW5fdOCq6SExp6af8mDDOm_J-q4IUTEYgCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Sylvia.gif" data-original-width="97" data-original-height="125" /></a><a href="https://4.bp.blogspot.com/-iIr2j7GEc8w/Xdj-rWc_JgI/AAAAAAAAukE/H5iPlxJIgmkv82j99H563UMwQGNKwzdkQCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Tami.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-iIr2j7GEc8w/Xdj-rWc_JgI/AAAAAAAAukE/H5iPlxJIgmkv82j99H563UMwQGNKwzdkQCLcBGAsYHQ/s1600/be_advent19_10_ta_wa_tp_Tami.gif" data-original-width="97" data-original-height="125" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-16.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec17() {
    ?>
    <p>
        <img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_11_p2p_wa_tp_euri.gif" />
    </p>
    <p>
        Tubes by: <a href="http://whimsyattic.net/" target="_blank">WA</a>, <a href="http://www.tatipixel.com/" target="_blank">TP</a>.
    </p>
    <hr />
    <p>
        <a href="https://2.bp.blogspot.com/-NY198eNmMIQ/XdkAfGqK5wI/AAAAAAAAuks/JBivf2g0mM8X2HNgLfdPf5kCG1gz389_ACLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Annica.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-NY198eNmMIQ/XdkAfGqK5wI/AAAAAAAAuks/JBivf2g0mM8X2HNgLfdPf5kCG1gz389_ACLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Annica.gif" data-original-width="150" data-original-height="132" /></a><a href="https://3.bp.blogspot.com/-S-Bo6tWmN_o/XdkAfO8qvtI/AAAAAAAAukw/Ar6NhnaYjMo_6lhpF8X1U78yGiDvfl_HgCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Bella.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-S-Bo6tWmN_o/XdkAfO8qvtI/AAAAAAAAukw/Ar6NhnaYjMo_6lhpF8X1U78yGiDvfl_HgCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Bella.gif" data-original-width="150" data-original-height="132" /></a><a href="https://3.bp.blogspot.com/-08UNN96Fy0c/XdkAe-4q_pI/AAAAAAAAuko/zN6qzNgEv6cJifC1vVZVCEZ3l97aLHkaQCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Beth.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-08UNN96Fy0c/XdkAe-4q_pI/AAAAAAAAuko/zN6qzNgEv6cJifC1vVZVCEZ3l97aLHkaQCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Beth.gif" data-original-width="150" data-original-height="132" /></a><a href="https://2.bp.blogspot.com/-hDlNR1BQMBE/XdkAgMx9LzI/AAAAAAAAuk0/jOC1dDVSAssJrY4N7GpKO_jqeTeXKC0lwCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Cris.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-hDlNR1BQMBE/XdkAgMx9LzI/AAAAAAAAuk0/jOC1dDVSAssJrY4N7GpKO_jqeTeXKC0lwCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Cris.gif" data-original-width="150" data-original-height="132" /></a><a href="https://4.bp.blogspot.com/-8e7N1dt3N5M/XdkAgDBdSkI/AAAAAAAAuk4/EQj8zE-RICk648TL9OjR8VcMP6gEshjngCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Darlene.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-8e7N1dt3N5M/XdkAgDBdSkI/AAAAAAAAuk4/EQj8zE-RICk648TL9OjR8VcMP6gEshjngCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Darlene.gif" data-original-width="150" data-original-height="132" /></a><a href="https://3.bp.blogspot.com/-NDX3ng7DutI/XdkAgnXb-mI/AAAAAAAAuk8/FiZjvcGMTlUodX4HsuMCxKUSbnLmcRh5wCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Heather.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-NDX3ng7DutI/XdkAgnXb-mI/AAAAAAAAuk8/FiZjvcGMTlUodX4HsuMCxKUSbnLmcRh5wCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Heather.gif" data-original-width="150" data-original-height="132" /></a><a href="https://4.bp.blogspot.com/-UFp91blJeMA/XdkAhmU9BeI/AAAAAAAAulA/_ip5uzS_6PUfd0452u_-QfdM7QzERNDWgCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Inger.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-UFp91blJeMA/XdkAhmU9BeI/AAAAAAAAulA/_ip5uzS_6PUfd0452u_-QfdM7QzERNDWgCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Inger.gif" data-original-width="150" data-original-height="132" /></a><a href="https://1.bp.blogspot.com/-O_WaT7Px8xE/XdkAiFaoDNI/AAAAAAAAulE/fmwKKjrpMOwbtkSGdnq5haKhP-rixA-EgCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Julie.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-O_WaT7Px8xE/XdkAiFaoDNI/AAAAAAAAulE/fmwKKjrpMOwbtkSGdnq5haKhP-rixA-EgCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Julie.gif" data-original-width="150" data-original-height="132" /></a><a href="https://3.bp.blogspot.com/--N63OaaeBE8/XdkAie3rhoI/AAAAAAAAulI/PIUs7R-JgAIKo0KIVQvGc-zCBmyiI4YsACLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Marcinha.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/--N63OaaeBE8/XdkAie3rhoI/AAAAAAAAulI/PIUs7R-JgAIKo0KIVQvGc-zCBmyiI4YsACLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Marcinha.gif" data-original-width="150" data-original-height="132" /></a><a href="https://1.bp.blogspot.com/-M5Bn34aKMA0/XdkAiZbROSI/AAAAAAAAulM/ls3wwe-ntsI0YQYisrm9wuAbNkG8rdf2QCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Mely.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-M5Bn34aKMA0/XdkAiZbROSI/AAAAAAAAulM/ls3wwe-ntsI0YQYisrm9wuAbNkG8rdf2QCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Mely.gif" data-original-width="150" data-original-height="132" /></a><a href="https://2.bp.blogspot.com/-_3QXSSNYkow/XdkAjP5maeI/AAAAAAAAulQ/1nPll2Insrw0s2TQlfRTX2rKWSduD5kiQCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Nicky.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-_3QXSSNYkow/XdkAjP5maeI/AAAAAAAAulQ/1nPll2Insrw0s2TQlfRTX2rKWSduD5kiQCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Nicky.gif" data-original-width="150" data-original-height="132" /></a><a href="https://3.bp.blogspot.com/-IFb2JAia2No/XdkAjickbTI/AAAAAAAAulU/vicqykcAdcIDFQoNjP576-godwhfuKmLgCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Orella.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-IFb2JAia2No/XdkAjickbTI/AAAAAAAAulU/vicqykcAdcIDFQoNjP576-godwhfuKmLgCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Orella.gif" data-original-width="150" data-original-height="132" /></a><a href="https://4.bp.blogspot.com/-cXbUBkSfTRQ/XdkAkL-HPLI/AAAAAAAAulY/y8eTFJOLfnwb31srQzeoOgL5gHVJX0IlgCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Sylvia.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-cXbUBkSfTRQ/XdkAkL-HPLI/AAAAAAAAulY/y8eTFJOLfnwb31srQzeoOgL5gHVJX0IlgCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Sylvia.gif" data-original-width="150" data-original-height="132" /></a><a href="https://4.bp.blogspot.com/-JBod06ZkDq0/XdkAkkZlU7I/AAAAAAAAulg/EMyMc_1x5Qkdvv7tKPkqGL70JBTkO4zvwCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Tami.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-JBod06ZkDq0/XdkAkkZlU7I/AAAAAAAAulg/EMyMc_1x5Qkdvv7tKPkqGL70JBTkO4zvwCLcBGAsYHQ/s1600/be_advent19_11_p2p_wa_tp_Tami.gif" data-original-width="150" data-original-height="132" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-17.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec18() {
    ?>
    <p>
        <img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_12_myg_md_wa_euri.gif" />
    </p>
    <p>
        Tubes by: <a href="http://www.meyougraphics.bravehost.com/" target="_blank">MYG</a>, <a href="http://mydoodles.info/" target="_blank">MD</a>, <a href="http://whimsyattic.net/" target="_blank">WA</a>.
    </p>
    <hr />
    <p>
        <a href="https://1.bp.blogspot.com/-oCR9h9uhp5Q/XdkBUzrKIdI/AAAAAAAAumQ/1YgTngWu3JwPz8ruGa0eo4VHGSoU9IN9wCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Annica.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-oCR9h9uhp5Q/XdkBUzrKIdI/AAAAAAAAumQ/1YgTngWu3JwPz8ruGa0eo4VHGSoU9IN9wCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Annica.gif" data-original-width="202" data-original-height="244" /></a><a href="https://2.bp.blogspot.com/-v_fWElfknHc/XdkBUyzHYwI/AAAAAAAAumM/prPYP4eibks1PPeeQ43_zT_I6USsPMOJwCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Bella.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-v_fWElfknHc/XdkBUyzHYwI/AAAAAAAAumM/prPYP4eibks1PPeeQ43_zT_I6USsPMOJwCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Bella.gif" data-original-width="202" data-original-height="244" /></a><a href="https://4.bp.blogspot.com/-A-x3aQZDoUs/XdkBUy6QegI/AAAAAAAAumI/xd3IABXhANE5S7CZ0CBgzRDzbMmy768NgCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Beth.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-A-x3aQZDoUs/XdkBUy6QegI/AAAAAAAAumI/xd3IABXhANE5S7CZ0CBgzRDzbMmy768NgCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Beth.gif" data-original-width="202" data-original-height="244" /></a><a href="https://4.bp.blogspot.com/-WTV5uqYZ1AM/XdkBVtCL4tI/AAAAAAAAumU/H6Ef2CLzngA9eujgzbVwpjm4tEtVB0MsgCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Cris.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-WTV5uqYZ1AM/XdkBVtCL4tI/AAAAAAAAumU/H6Ef2CLzngA9eujgzbVwpjm4tEtVB0MsgCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Cris.gif" data-original-width="202" data-original-height="244" /></a><a href="https://4.bp.blogspot.com/-FDx1VvNrn9w/XdkBWVQn61I/AAAAAAAAumY/3qO-kiZNOq0t0pSsLVdrfpnMiyZh2fR-gCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Darlene.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-FDx1VvNrn9w/XdkBWVQn61I/AAAAAAAAumY/3qO-kiZNOq0t0pSsLVdrfpnMiyZh2fR-gCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Darlene.gif" data-original-width="202" data-original-height="244" /></a><a href="https://1.bp.blogspot.com/-W37yZabjlgQ/XdkBWgwiycI/AAAAAAAAumc/q5mDatDuuvgg8qmnaqZeVKoG02Ps7RnxgCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Heather.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-W37yZabjlgQ/XdkBWgwiycI/AAAAAAAAumc/q5mDatDuuvgg8qmnaqZeVKoG02Ps7RnxgCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Heather.gif" data-original-width="202" data-original-height="244" /></a><a href="https://1.bp.blogspot.com/-KkOFubMUHwQ/XdkBXG51GMI/AAAAAAAAumg/3koImlHfDEYf52jdGsxl8ssNIpva9k_WgCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Inger.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-KkOFubMUHwQ/XdkBXG51GMI/AAAAAAAAumg/3koImlHfDEYf52jdGsxl8ssNIpva9k_WgCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Inger.gif" data-original-width="202" data-original-height="244" /></a><a href="https://2.bp.blogspot.com/-QbeUOAw5hoI/XdkBXC0P9II/AAAAAAAAumk/9ulhY5EGxFwUeDTclCUCOi9XP4Xw94ltACLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Julie.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-QbeUOAw5hoI/XdkBXC0P9II/AAAAAAAAumk/9ulhY5EGxFwUeDTclCUCOi9XP4Xw94ltACLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Julie.gif" data-original-width="202" data-original-height="244" /></a><a href="https://2.bp.blogspot.com/-o2cVUoN1_4U/XdkBXjxIZ_I/AAAAAAAAumo/faAax-91amU6CSXAtYzjIza3Spr3pF5ngCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Marcinha.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-o2cVUoN1_4U/XdkBXjxIZ_I/AAAAAAAAumo/faAax-91amU6CSXAtYzjIza3Spr3pF5ngCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Marcinha.gif" data-original-width="202" data-original-height="244" /></a><a href="https://1.bp.blogspot.com/-05Du0le2BFk/XdkBX2xStqI/AAAAAAAAums/CX0USoOQ1X4l0KLp2JIsR4bQNOqxHFzZgCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Mely.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-05Du0le2BFk/XdkBX2xStqI/AAAAAAAAums/CX0USoOQ1X4l0KLp2JIsR4bQNOqxHFzZgCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Mely.gif" data-original-width="202" data-original-height="244" /></a><a href="https://2.bp.blogspot.com/-3RrVX1zx4nw/XdkBYZ6DarI/AAAAAAAAum0/fHnxdbaC2PIhvAVy-cdUgktLXJWW1_tKQCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Nicky.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-3RrVX1zx4nw/XdkBYZ6DarI/AAAAAAAAum0/fHnxdbaC2PIhvAVy-cdUgktLXJWW1_tKQCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Nicky.gif" data-original-width="202" data-original-height="244" /></a><a href="https://1.bp.blogspot.com/-EcmHqk5kg0A/XdkBYVE7DDI/AAAAAAAAumw/-3BsZJ7uA7QsiXows6ihaDMdMOyLu_5kQCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Orella.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-EcmHqk5kg0A/XdkBYVE7DDI/AAAAAAAAumw/-3BsZJ7uA7QsiXows6ihaDMdMOyLu_5kQCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Orella.gif" data-original-width="202" data-original-height="244" /></a><a href="https://4.bp.blogspot.com/-0Gx0cXkmQXg/XdkBY5MCRVI/AAAAAAAAum4/0XJ0wFSeeXs-8jNW79CT9iM3YSnvnH8zgCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Sylvia.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-0Gx0cXkmQXg/XdkBY5MCRVI/AAAAAAAAum4/0XJ0wFSeeXs-8jNW79CT9iM3YSnvnH8zgCLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Sylvia.gif" data-original-width="202" data-original-height="244" /></a><a href="https://1.bp.blogspot.com/-IZKJoBA2YOg/XdkBZKTWpRI/AAAAAAAAum8/lxD5-8I0bJomLDE-NAZlyUrc4ZbWMiE2ACLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Tami.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-IZKJoBA2YOg/XdkBZKTWpRI/AAAAAAAAum8/lxD5-8I0bJomLDE-NAZlyUrc4ZbWMiE2ACLcBGAsYHQ/s1600/be_advent19_12_myg_md_wa_Tami.gif" data-original-width="202" data-original-height="244" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-18.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec19() {
    ?>
    <p>
        <a href="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_completeset2.gif" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_completeset2.gif" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-19-non-tcg.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec20() {
    ?>
    <p>
        <img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_13_md_euri.gif" />
    </p>
    <p>
        Tubes by: <a href="http://mydoodles.info/" target="_blank">MD</a>.
    </p>
    <hr />
    <p>
        <a href="https://2.bp.blogspot.com/-OK7FFXe9KVc/XdkC-XHJ0YI/AAAAAAAAun0/PKV5yQ30NXAOluTOh0yDc43NqdJZt4hNACLcBGAsYHQ/s1600/be_advent19_13_md_Annica.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-OK7FFXe9KVc/XdkC-XHJ0YI/AAAAAAAAun0/PKV5yQ30NXAOluTOh0yDc43NqdJZt4hNACLcBGAsYHQ/s1600/be_advent19_13_md_Annica.gif" data-original-width="282" data-original-height="269" /></a><a href="https://3.bp.blogspot.com/-_HSiCW6z8s8/XdkC-Xr6CcI/AAAAAAAAunw/SxTDoiirlZoUtdk2NHKbsMcIKprKow8qgCLcBGAsYHQ/s1600/be_advent19_13_md_Bella.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-_HSiCW6z8s8/XdkC-Xr6CcI/AAAAAAAAunw/SxTDoiirlZoUtdk2NHKbsMcIKprKow8qgCLcBGAsYHQ/s1600/be_advent19_13_md_Bella.gif" data-original-width="282" data-original-height="269" /></a><a href="https://1.bp.blogspot.com/-IKjvNBKeIlw/XdkC-OAVS0I/AAAAAAAAuns/epAgrm1RE5oImbkXE83eJZpL7yOaxMOqgCLcBGAsYHQ/s1600/be_advent19_13_md_Beth.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-IKjvNBKeIlw/XdkC-OAVS0I/AAAAAAAAuns/epAgrm1RE5oImbkXE83eJZpL7yOaxMOqgCLcBGAsYHQ/s1600/be_advent19_13_md_Beth.gif" data-original-width="282" data-original-height="269" /></a><a href="https://3.bp.blogspot.com/-xrVHqcef0NU/XdkC_Th6kwI/AAAAAAAAun4/aWxldiZRslki4X5mywpyQ3pRRNlP_-WSgCLcBGAsYHQ/s1600/be_advent19_13_md_Cris.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-xrVHqcef0NU/XdkC_Th6kwI/AAAAAAAAun4/aWxldiZRslki4X5mywpyQ3pRRNlP_-WSgCLcBGAsYHQ/s1600/be_advent19_13_md_Cris.gif" data-original-width="282" data-original-height="269" /></a><a href="https://1.bp.blogspot.com/-wKL8l4zdqJA/XdkC_1edOBI/AAAAAAAAun8/qYDAtbD3C7si2SS3R0YtBKd2m7n4bbFygCLcBGAsYHQ/s1600/be_advent19_13_md_Darlene.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-wKL8l4zdqJA/XdkC_1edOBI/AAAAAAAAun8/qYDAtbD3C7si2SS3R0YtBKd2m7n4bbFygCLcBGAsYHQ/s1600/be_advent19_13_md_Darlene.gif" data-original-width="282" data-original-height="269" /></a><a href="https://1.bp.blogspot.com/-sp_dZA_XHMo/XdkDATYJhWI/AAAAAAAAuoA/HN0sjfkDUQ4biHlkmf9zBKHWAdMwFirxgCLcBGAsYHQ/s1600/be_advent19_13_md_Heather.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-sp_dZA_XHMo/XdkDATYJhWI/AAAAAAAAuoA/HN0sjfkDUQ4biHlkmf9zBKHWAdMwFirxgCLcBGAsYHQ/s1600/be_advent19_13_md_Heather.gif" data-original-width="282" data-original-height="269" /></a><a href="https://4.bp.blogspot.com/-pOrAz7Dte4Y/XdkDA_dnE5I/AAAAAAAAuoE/yKCd59ewY4Es1GPRPbhuFBx8ArJiFtmWQCLcBGAsYHQ/s1600/be_advent19_13_md_Inger.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-pOrAz7Dte4Y/XdkDA_dnE5I/AAAAAAAAuoE/yKCd59ewY4Es1GPRPbhuFBx8ArJiFtmWQCLcBGAsYHQ/s1600/be_advent19_13_md_Inger.gif" data-original-width="282" data-original-height="269" /></a><a href="https://4.bp.blogspot.com/-BWAYoym3r_U/XdkDA0fEFoI/AAAAAAAAuoI/ODmaHp5gBGMV-LmPXsjrg8rUY7mWcHHmACLcBGAsYHQ/s1600/be_advent19_13_md_Julie.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-BWAYoym3r_U/XdkDA0fEFoI/AAAAAAAAuoI/ODmaHp5gBGMV-LmPXsjrg8rUY7mWcHHmACLcBGAsYHQ/s1600/be_advent19_13_md_Julie.gif" data-original-width="282" data-original-height="269" /></a><a href="https://3.bp.blogspot.com/-hSYjiNRDsw4/XdkDBMzqyiI/AAAAAAAAuoM/wh48w4ljXG0fP-KAnmkpcxZVDiNFCobNwCLcBGAsYHQ/s1600/be_advent19_13_md_Marcinha.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-hSYjiNRDsw4/XdkDBMzqyiI/AAAAAAAAuoM/wh48w4ljXG0fP-KAnmkpcxZVDiNFCobNwCLcBGAsYHQ/s1600/be_advent19_13_md_Marcinha.gif" data-original-width="282" data-original-height="269" /></a><a href="https://4.bp.blogspot.com/-epwHQeqYdvs/XdkDBySgCQI/AAAAAAAAuoQ/hU7CrEl2ofcw7NWRdYwOIBdMxmLm8tF8gCLcBGAsYHQ/s1600/be_advent19_13_md_Mely.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-epwHQeqYdvs/XdkDBySgCQI/AAAAAAAAuoQ/hU7CrEl2ofcw7NWRdYwOIBdMxmLm8tF8gCLcBGAsYHQ/s1600/be_advent19_13_md_Mely.gif" data-original-width="282" data-original-height="269" /></a><a href="https://4.bp.blogspot.com/-Z-xXTgLJnk0/XdkDB8l1nqI/AAAAAAAAuoU/pgJeDgNIOPEA4VYjnawF4UpdQj22HBc_ACLcBGAsYHQ/s1600/be_advent19_13_md_Nicky.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-Z-xXTgLJnk0/XdkDB8l1nqI/AAAAAAAAuoU/pgJeDgNIOPEA4VYjnawF4UpdQj22HBc_ACLcBGAsYHQ/s1600/be_advent19_13_md_Nicky.gif" data-original-width="282" data-original-height="269" /></a><a href="https://1.bp.blogspot.com/-i0wcA3hXgpY/XdkDCD4264I/AAAAAAAAuoY/T68S2agVu0Ud-4rRg0BT6EyuJoWCagGsACLcBGAsYHQ/s1600/be_advent19_13_md_Orella.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-i0wcA3hXgpY/XdkDCD4264I/AAAAAAAAuoY/T68S2agVu0Ud-4rRg0BT6EyuJoWCagGsACLcBGAsYHQ/s1600/be_advent19_13_md_Orella.gif" data-original-width="282" data-original-height="269" /></a><a href="https://3.bp.blogspot.com/-z6CFDC-f3lc/XdkDDLrKmyI/AAAAAAAAuoc/w8XTtfL4iV4KGirpk7YNn3tfoSVkufBqQCLcBGAsYHQ/s1600/be_advent19_13_md_Sylvia.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-z6CFDC-f3lc/XdkDDLrKmyI/AAAAAAAAuoc/w8XTtfL4iV4KGirpk7YNn3tfoSVkufBqQCLcBGAsYHQ/s1600/be_advent19_13_md_Sylvia.gif" data-original-width="282" data-original-height="269" /></a><a href="https://2.bp.blogspot.com/-Rig09vUTqn8/XdkDDeRHAMI/AAAAAAAAuog/xuD9ER4M8icdIZeSOSNLL9SfQzplSlkZQCLcBGAsYHQ/s1600/be_advent19_13_md_Tami.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-Rig09vUTqn8/XdkDDeRHAMI/AAAAAAAAuog/xuD9ER4M8icdIZeSOSNLL9SfQzplSlkZQCLcBGAsYHQ/s1600/be_advent19_13_md_Tami.gif" data-original-width="282" data-original-height="269" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-20.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec21() {
    ?>
    <p>
        <img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_14_tp_euri.gif" />
    </p>
    <p>
        Tubes by: <a href="http://www.tatipixel.com/" target="_blank">TP</a>.
    </p>
    <hr />
    <p>
        <a href="https://3.bp.blogspot.com/-TybvZ4yPZeY/Xd_QD5DCb2I/AAAAAAAAuxs/mPnTWdzKM-ojZipwKhHVdgc8jNBfzn-vwCLcBGAsYHQ/s1600/be_advent19_14_tp_Annica.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-TybvZ4yPZeY/Xd_QD5DCb2I/AAAAAAAAuxs/mPnTWdzKM-ojZipwKhHVdgc8jNBfzn-vwCLcBGAsYHQ/s1600/be_advent19_14_tp_Annica.gif" data-original-width="293" data-original-height="191" /></a><a href="https://2.bp.blogspot.com/-5aELCKdxzbc/Xd_QDk7ob1I/AAAAAAAAuxk/GDpMIopr-0sT5AO8FFwiO0SncpGeE9HiACLcBGAsYHQ/s1600/be_advent19_14_tp_Bella.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-5aELCKdxzbc/Xd_QDk7ob1I/AAAAAAAAuxk/GDpMIopr-0sT5AO8FFwiO0SncpGeE9HiACLcBGAsYHQ/s1600/be_advent19_14_tp_Bella.gif" data-original-width="293" data-original-height="191" /></a><a href="https://2.bp.blogspot.com/-Qev1iq6qB80/Xd_QD8iv_QI/AAAAAAAAuxo/-cZdDUsKffguJf6twKGpEvvzwYm8bpNmQCLcBGAsYHQ/s1600/be_advent19_14_tp_Beth.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-Qev1iq6qB80/Xd_QD8iv_QI/AAAAAAAAuxo/-cZdDUsKffguJf6twKGpEvvzwYm8bpNmQCLcBGAsYHQ/s1600/be_advent19_14_tp_Beth.gif" data-original-width="293" data-original-height="191" /></a><a href="https://4.bp.blogspot.com/-6z3_5yvCPbA/Xd_QE0XA-LI/AAAAAAAAuxw/6unX_4JM420ijVn3l9Fg4nXcfKUjjY-AgCLcBGAsYHQ/s1600/be_advent19_14_tp_Cris.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-6z3_5yvCPbA/Xd_QE0XA-LI/AAAAAAAAuxw/6unX_4JM420ijVn3l9Fg4nXcfKUjjY-AgCLcBGAsYHQ/s1600/be_advent19_14_tp_Cris.gif" data-original-width="293" data-original-height="191" /></a><a href="https://1.bp.blogspot.com/-MWa9QaEUrRE/Xd_QFPPYDYI/AAAAAAAAux4/q0tiY69go-8DAaYskWlD5gHCo4PVfzXhACLcBGAsYHQ/s1600/be_advent19_14_tp_Darlene.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-MWa9QaEUrRE/Xd_QFPPYDYI/AAAAAAAAux4/q0tiY69go-8DAaYskWlD5gHCo4PVfzXhACLcBGAsYHQ/s1600/be_advent19_14_tp_Darlene.gif" data-original-width="293" data-original-height="191" /></a><a href="https://4.bp.blogspot.com/-DLINaYDiBYE/Xd_QE6sigPI/AAAAAAAAux0/1hwX1e51FUMqn_MAgtxJR2GDSL8QY_olACLcBGAsYHQ/s1600/be_advent19_14_tp_Heather.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-DLINaYDiBYE/Xd_QE6sigPI/AAAAAAAAux0/1hwX1e51FUMqn_MAgtxJR2GDSL8QY_olACLcBGAsYHQ/s1600/be_advent19_14_tp_Heather.gif" data-original-width="293" data-original-height="191" /></a><a href="https://2.bp.blogspot.com/-13LR73IEbhQ/Xd_QF68uy4I/AAAAAAAAux8/o-I_-rYMx2Q7tlmBRK9CRVVR3NHzjTRBQCLcBGAsYHQ/s1600/be_advent19_14_tp_Inger.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-13LR73IEbhQ/Xd_QF68uy4I/AAAAAAAAux8/o-I_-rYMx2Q7tlmBRK9CRVVR3NHzjTRBQCLcBGAsYHQ/s1600/be_advent19_14_tp_Inger.gif" data-original-width="293" data-original-height="191" /></a><a href="https://1.bp.blogspot.com/-_uMHS8sdwDY/Xd_QGXlD32I/AAAAAAAAuyA/D_LD13UC1GY-EqrzR4u9xTNFG2dlnyc5gCLcBGAsYHQ/s1600/be_advent19_14_tp_Julie.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-_uMHS8sdwDY/Xd_QGXlD32I/AAAAAAAAuyA/D_LD13UC1GY-EqrzR4u9xTNFG2dlnyc5gCLcBGAsYHQ/s1600/be_advent19_14_tp_Julie.gif" data-original-width="293" data-original-height="191" /></a><a href="https://2.bp.blogspot.com/-46QMnWLXZeU/Xd_QGjbmTpI/AAAAAAAAuyI/fXqlH5_W4kIYfndyySuHaqYA_trsH4ZigCLcBGAsYHQ/s1600/be_advent19_14_tp_Marcinha.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-46QMnWLXZeU/Xd_QGjbmTpI/AAAAAAAAuyI/fXqlH5_W4kIYfndyySuHaqYA_trsH4ZigCLcBGAsYHQ/s1600/be_advent19_14_tp_Marcinha.gif" data-original-width="293" data-original-height="191" /></a><a href="https://4.bp.blogspot.com/-TcQ-Wcc8VZ0/Xd_QGgBMjFI/AAAAAAAAuyE/9j28niKqk9EADi_svX-w-9rj_ciBUd3JACLcBGAsYHQ/s1600/be_advent19_14_tp_Mely.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-TcQ-Wcc8VZ0/Xd_QGgBMjFI/AAAAAAAAuyE/9j28niKqk9EADi_svX-w-9rj_ciBUd3JACLcBGAsYHQ/s1600/be_advent19_14_tp_Mely.gif" data-original-width="293" data-original-height="191" /></a><a href="https://1.bp.blogspot.com/-EaturPcaooU/Xd_QHVz21aI/AAAAAAAAuyM/jVHMTnQ0YV4Y8tFzEH252oVZge3Yc4raACLcBGAsYHQ/s1600/be_advent19_14_tp_Nicky.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-EaturPcaooU/Xd_QHVz21aI/AAAAAAAAuyM/jVHMTnQ0YV4Y8tFzEH252oVZge3Yc4raACLcBGAsYHQ/s1600/be_advent19_14_tp_Nicky.gif" data-original-width="293" data-original-height="191" /></a><a href="https://1.bp.blogspot.com/-7uU1uS9wwQM/Xd_QHfinTYI/AAAAAAAAuyQ/eNks8cQVPcoqJGzWWEtkYbKKu6GNb-79wCLcBGAsYHQ/s1600/be_advent19_14_tp_Orella.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-7uU1uS9wwQM/Xd_QHfinTYI/AAAAAAAAuyQ/eNks8cQVPcoqJGzWWEtkYbKKu6GNb-79wCLcBGAsYHQ/s1600/be_advent19_14_tp_Orella.gif" data-original-width="293" data-original-height="191" /></a><a href="https://2.bp.blogspot.com/-mi6H9G3FLBw/Xd_QH2iKPGI/AAAAAAAAuyU/1sK0qmbs44keY0hx_83Hzg1Klcwud6wmACLcBGAsYHQ/s1600/be_advent19_14_tp_Sylvia.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-mi6H9G3FLBw/Xd_QH2iKPGI/AAAAAAAAuyU/1sK0qmbs44keY0hx_83Hzg1Klcwud6wmACLcBGAsYHQ/s1600/be_advent19_14_tp_Sylvia.gif" data-original-width="293" data-original-height="191" /></a><a href="https://3.bp.blogspot.com/-9PCVxKLk2zY/Xd_QIpbuZnI/AAAAAAAAuyY/_4m9V8lQxL8sAdEvkZx4ijdTpE_A8bP5gCLcBGAsYHQ/s1600/be_advent19_14_tp_Tami.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-9PCVxKLk2zY/Xd_QIpbuZnI/AAAAAAAAuyY/_4m9V8lQxL8sAdEvkZx4ijdTpE_A8bP5gCLcBGAsYHQ/s1600/be_advent19_14_tp_Tami.gif" data-original-width="293" data-original-height="191" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-21.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec22() {
    ?>
    <p>
        <img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_15_tp_euri.gif" />
    </p>
    <p>
        Tubes by: <a href="http://www.tatipixel.com/" target="_blank">TP</a>.
    </p>
    <hr />
    <p>
        <a href="https://3.bp.blogspot.com/-HrmThKIAjcI/Xd_RtwKiCrI/AAAAAAAAuzM/ql7sgb8C0U88SR0XRd87LcSvkjkXM1y-QCLcBGAsYHQ/s1600/be_advent19_15_tp_Annica.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-HrmThKIAjcI/Xd_RtwKiCrI/AAAAAAAAuzM/ql7sgb8C0U88SR0XRd87LcSvkjkXM1y-QCLcBGAsYHQ/s1600/be_advent19_15_tp_Annica.gif" data-original-width="128" data-original-height="153" /></a><a href="https://2.bp.blogspot.com/-qw9ztliTqoA/Xd_Rtj80D6I/AAAAAAAAuzI/DBJTuJmVllogHUsELLvcnduwGKAapRw7wCLcBGAsYHQ/s1600/be_advent19_15_tp_Bella.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-qw9ztliTqoA/Xd_Rtj80D6I/AAAAAAAAuzI/DBJTuJmVllogHUsELLvcnduwGKAapRw7wCLcBGAsYHQ/s1600/be_advent19_15_tp_Bella.gif" data-original-width="128" data-original-height="153" /></a><a href="https://1.bp.blogspot.com/-ZEhNjU4J1QU/Xd_Rth9r8uI/AAAAAAAAuzE/_2fLIP3fmmcYOOKwaDGxUmd_tQ5xOUb2ACLcBGAsYHQ/s1600/be_advent19_15_tp_Beth.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-ZEhNjU4J1QU/Xd_Rth9r8uI/AAAAAAAAuzE/_2fLIP3fmmcYOOKwaDGxUmd_tQ5xOUb2ACLcBGAsYHQ/s1600/be_advent19_15_tp_Beth.gif" data-original-width="128" data-original-height="153" /></a><a href="https://4.bp.blogspot.com/-tFbpdNrBNyU/Xd_RuVRoCuI/AAAAAAAAuzQ/ub9CJjTdeKMnfuomd8srE1mQM3KE_phWACLcBGAsYHQ/s1600/be_advent19_15_tp_Cris.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-tFbpdNrBNyU/Xd_RuVRoCuI/AAAAAAAAuzQ/ub9CJjTdeKMnfuomd8srE1mQM3KE_phWACLcBGAsYHQ/s1600/be_advent19_15_tp_Cris.gif" data-original-width="128" data-original-height="153" /></a><a href="https://3.bp.blogspot.com/-EKdX1PLDPhM/Xd_RuqZmHSI/AAAAAAAAuzU/j0ZnNjEAMvIaUhWDNENa1AJYIexSbFB0QCLcBGAsYHQ/s1600/be_advent19_15_tp_Darlene.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-EKdX1PLDPhM/Xd_RuqZmHSI/AAAAAAAAuzU/j0ZnNjEAMvIaUhWDNENa1AJYIexSbFB0QCLcBGAsYHQ/s1600/be_advent19_15_tp_Darlene.gif" data-original-width="128" data-original-height="153" /></a><a href="https://2.bp.blogspot.com/-VTK0fOuPkMw/Xd_Ru1vgJqI/AAAAAAAAuzY/UrdeGSY7HXAaPXr4uXKcfQFmVjlBbgkoACLcBGAsYHQ/s1600/be_advent19_15_tp_Heather.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-VTK0fOuPkMw/Xd_Ru1vgJqI/AAAAAAAAuzY/UrdeGSY7HXAaPXr4uXKcfQFmVjlBbgkoACLcBGAsYHQ/s1600/be_advent19_15_tp_Heather.gif" data-original-width="128" data-original-height="153" /></a><a href="https://1.bp.blogspot.com/-IFTg_zKJYhs/Xd_RvDuGaEI/AAAAAAAAuzc/DIXSDi50uLoFehL6XAIS-Ex2ync1IF70wCLcBGAsYHQ/s1600/be_advent19_15_tp_Inger.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-IFTg_zKJYhs/Xd_RvDuGaEI/AAAAAAAAuzc/DIXSDi50uLoFehL6XAIS-Ex2ync1IF70wCLcBGAsYHQ/s1600/be_advent19_15_tp_Inger.gif" data-original-width="128" data-original-height="153" /></a><a href="https://2.bp.blogspot.com/-TqwnEFGYGeg/Xd_RvzfFVzI/AAAAAAAAuzg/rP6dzg8-Tdc8tz7Z0mNo2znhlXpIwAPcgCLcBGAsYHQ/s1600/be_advent19_15_tp_Julie.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-TqwnEFGYGeg/Xd_RvzfFVzI/AAAAAAAAuzg/rP6dzg8-Tdc8tz7Z0mNo2znhlXpIwAPcgCLcBGAsYHQ/s1600/be_advent19_15_tp_Julie.gif" data-original-width="128" data-original-height="153" /></a><a href="https://1.bp.blogspot.com/-yTMx8i0Oehw/Xd_RvwO2qNI/AAAAAAAAuzk/Iwv3wha65to9TYgSbgpYEyz4QwaBkPngACLcBGAsYHQ/s1600/be_advent19_15_tp_Marcinha.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-yTMx8i0Oehw/Xd_RvwO2qNI/AAAAAAAAuzk/Iwv3wha65to9TYgSbgpYEyz4QwaBkPngACLcBGAsYHQ/s1600/be_advent19_15_tp_Marcinha.gif" data-original-width="128" data-original-height="153" /></a><a href="https://2.bp.blogspot.com/-PyliEHssbcU/Xd_RwIwvvTI/AAAAAAAAuzo/eoNhUcUsDQo2GHo2f5kohzbMlAHQiy6ZACLcBGAsYHQ/s1600/be_advent19_15_tp_Mely.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-PyliEHssbcU/Xd_RwIwvvTI/AAAAAAAAuzo/eoNhUcUsDQo2GHo2f5kohzbMlAHQiy6ZACLcBGAsYHQ/s1600/be_advent19_15_tp_Mely.gif" data-original-width="128" data-original-height="153" /></a><a href="https://3.bp.blogspot.com/-skYUScMU0XM/Xd_RwjfuULI/AAAAAAAAuzs/U_1RrGZqNAgenm-zNoYfzeTQpyOWwQY2ACLcBGAsYHQ/s1600/be_advent19_15_tp_Nicky.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-skYUScMU0XM/Xd_RwjfuULI/AAAAAAAAuzs/U_1RrGZqNAgenm-zNoYfzeTQpyOWwQY2ACLcBGAsYHQ/s1600/be_advent19_15_tp_Nicky.gif" data-original-width="128" data-original-height="153" /></a><a href="https://1.bp.blogspot.com/-crvAezkmlGU/Xd_Rw1npujI/AAAAAAAAuzw/DQliTI7AKpoiVMT4t6qfBSeGL777eOqhwCLcBGAsYHQ/s1600/be_advent19_15_tp_Orella.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-crvAezkmlGU/Xd_Rw1npujI/AAAAAAAAuzw/DQliTI7AKpoiVMT4t6qfBSeGL777eOqhwCLcBGAsYHQ/s1600/be_advent19_15_tp_Orella.gif" data-original-width="128" data-original-height="153" /></a><a href="https://3.bp.blogspot.com/-Pwn2kXUaPdg/Xd_RxPlfobI/AAAAAAAAuz0/HWl-qVPisXI-E5_tH9XyvPY8QxdSbnwGwCLcBGAsYHQ/s1600/be_advent19_15_tp_Sylvia.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-Pwn2kXUaPdg/Xd_RxPlfobI/AAAAAAAAuz0/HWl-qVPisXI-E5_tH9XyvPY8QxdSbnwGwCLcBGAsYHQ/s1600/be_advent19_15_tp_Sylvia.gif" data-original-width="128" data-original-height="153" /></a><a href="https://2.bp.blogspot.com/-RitPXjvKAFE/Xd_Rx51XXRI/AAAAAAAAuz4/AqJWQWMaUa8PnpcYyL0BR0jFYL2jHBMaACLcBGAsYHQ/s1600/be_advent19_15_tp_Tami.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-RitPXjvKAFE/Xd_Rx51XXRI/AAAAAAAAuz4/AqJWQWMaUa8PnpcYyL0BR0jFYL2jHBMaACLcBGAsYHQ/s1600/be_advent19_15_tp_Tami.gif" data-original-width="128" data-original-height="153" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-22.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec23() {
    ?>
    <p>
        <a href="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_tubeset2.gif" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_tubeset2.gif" /></a>
    </p>
    <p>
        <strong>To claim your tube set:</strong><br />
        Go to <a href="https://beyondeternal.com/tubes" target="_blank">my pixel tube site</a> and pick any tube set you want.<br />
        Email me this certificate, and let me know which tube set you wanted.
    </p>
    <?php
}

function ac_dec24() {
    ?>
    <p>
        <img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_16_md_dm_tcm_kc_pl_euri.gif" />
    </p>
    <p>
        Tubes by: <a href="http://mydoodles.info/" target="_blank">MD</a>, DM (closed), TCM (closed), <a href="http://www.kristyncreations.ca/" target="_blank">KC</a>, PL (closed).
    </p>
    <hr />
    <p>
        <a href="https://3.bp.blogspot.com/-J2MMASqOn-U/Xd_Sisy4VCI/AAAAAAAAu0s/Gj26cI9Zv00Gcx1pRMdeLqT6U65IDDNYgCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Annica.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-J2MMASqOn-U/Xd_Sisy4VCI/AAAAAAAAu0s/Gj26cI9Zv00Gcx1pRMdeLqT6U65IDDNYgCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Annica.gif" data-original-width="142" data-original-height="177" /></a><a href="https://4.bp.blogspot.com/-uk3edB6Xiyo/Xd_SieVvdYI/AAAAAAAAu0o/D9sLSMa2NxIMDdoqj7jjDuiPvc8aT1MygCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Bella.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-uk3edB6Xiyo/Xd_SieVvdYI/AAAAAAAAu0o/D9sLSMa2NxIMDdoqj7jjDuiPvc8aT1MygCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Bella.gif" data-original-width="142" data-original-height="177" /></a><a href="https://2.bp.blogspot.com/-CiSvyx8C61w/Xd_SilBxsMI/AAAAAAAAu0w/RjZLrF7cHvkrB-ujXz-VPsGvATkjTWpewCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Beth.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-CiSvyx8C61w/Xd_SilBxsMI/AAAAAAAAu0w/RjZLrF7cHvkrB-ujXz-VPsGvATkjTWpewCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Beth.gif" data-original-width="142" data-original-height="177" /></a><a href="https://2.bp.blogspot.com/-QXJTsvm8Nms/Xd_SjgzqPzI/AAAAAAAAu00/UjQAQkeZPlov9k4q3O3AZvssjd_uYv3JACLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Cris.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-QXJTsvm8Nms/Xd_SjgzqPzI/AAAAAAAAu00/UjQAQkeZPlov9k4q3O3AZvssjd_uYv3JACLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Cris.gif" data-original-width="142" data-original-height="177" /></a><a href="https://1.bp.blogspot.com/-ABxl-daiMfQ/Xd_SkO6LLwI/AAAAAAAAu04/lxvIV5FDtfw5CiBY63sRk1JyHPjV2JVKACLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Darlene.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-ABxl-daiMfQ/Xd_SkO6LLwI/AAAAAAAAu04/lxvIV5FDtfw5CiBY63sRk1JyHPjV2JVKACLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Darlene.gif" data-original-width="142" data-original-height="177" /></a><a href="https://3.bp.blogspot.com/-MxQegA5YRS0/Xd_SkNkMCkI/AAAAAAAAu08/6GoEIWsSTbkvYHyAwuyQRAsSj99vnwWMgCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Heather.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-MxQegA5YRS0/Xd_SkNkMCkI/AAAAAAAAu08/6GoEIWsSTbkvYHyAwuyQRAsSj99vnwWMgCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Heather.gif" data-original-width="142" data-original-height="177" /></a><a href="https://1.bp.blogspot.com/-u9hs1hWmVZ0/Xd_SkjL925I/AAAAAAAAu1A/yUCbtjNrCY0oga8WQ3Zz5jWubS2yYz4vQCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Inger.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-u9hs1hWmVZ0/Xd_SkjL925I/AAAAAAAAu1A/yUCbtjNrCY0oga8WQ3Zz5jWubS2yYz4vQCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Inger.gif" data-original-width="142" data-original-height="177" /></a><a href="https://3.bp.blogspot.com/-9tEcpz0V_yA/Xd_SlSFrUDI/AAAAAAAAu1E/Onyi6wxzvkoKUJ4YZiYv5p_m81GkktDRQCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Julie.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-9tEcpz0V_yA/Xd_SlSFrUDI/AAAAAAAAu1E/Onyi6wxzvkoKUJ4YZiYv5p_m81GkktDRQCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Julie.gif" data-original-width="142" data-original-height="177" /></a><a href="https://4.bp.blogspot.com/-2kprGCvRJw4/Xd_Sla_K_sI/AAAAAAAAu1I/oz2xhJx_BG8gtQvV-teCMdyP7OetIp79wCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Marcinha.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-2kprGCvRJw4/Xd_Sla_K_sI/AAAAAAAAu1I/oz2xhJx_BG8gtQvV-teCMdyP7OetIp79wCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Marcinha.gif" data-original-width="142" data-original-height="177" /></a><a href="https://3.bp.blogspot.com/-W5tyk_dGOmg/Xd_SlpjQOwI/AAAAAAAAu1M/oBDzroGNlQkhfTeE0b8B4i76FGY34_wzgCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Mely.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-W5tyk_dGOmg/Xd_SlpjQOwI/AAAAAAAAu1M/oBDzroGNlQkhfTeE0b8B4i76FGY34_wzgCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Mely.gif" data-original-width="142" data-original-height="177" /></a><a href="https://3.bp.blogspot.com/-XcHyKAS5L2Q/Xd_SmcWMCmI/AAAAAAAAu1Q/lu9hUEBYa9EVrivL9bHLMolQAGSYoxE1ACLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Nicky.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-XcHyKAS5L2Q/Xd_SmcWMCmI/AAAAAAAAu1Q/lu9hUEBYa9EVrivL9bHLMolQAGSYoxE1ACLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Nicky.gif" data-original-width="142" data-original-height="177" /></a><a href="https://2.bp.blogspot.com/-CQyEFS93bw4/Xd_SmeV8bVI/AAAAAAAAu1U/5QIs2Aabto8mMjijELezH5M5No9pdVK-gCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Orella.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-CQyEFS93bw4/Xd_SmeV8bVI/AAAAAAAAu1U/5QIs2Aabto8mMjijELezH5M5No9pdVK-gCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Orella.gif" data-original-width="142" data-original-height="177" /></a><a href="https://1.bp.blogspot.com/-Ti0KnqGODUU/Xd_Smy4IGCI/AAAAAAAAu1Y/uNQKYbdpSjQQqjNbQZ6Ty60uhtH2qpDcQCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Sylvia.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-Ti0KnqGODUU/Xd_Smy4IGCI/AAAAAAAAu1Y/uNQKYbdpSjQQqjNbQZ6Ty60uhtH2qpDcQCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Sylvia.gif" data-original-width="142" data-original-height="177" /></a><a href="https://4.bp.blogspot.com/-GFnWKC9aBrI/Xd_SnnpvtwI/AAAAAAAAu1c/DLkEbetNYukGXy8g9FlpSQUR1zsIyX_IgCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Tami.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-GFnWKC9aBrI/Xd_SnnpvtwI/AAAAAAAAu1c/DLkEbetNYukGXy8g9FlpSQUR1zsIyX_IgCLcBGAsYHQ/s1600/be_advent19_16_md_dm_tcm_kc_pl_Tami.gif" data-original-width="142" data-original-height="177" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-24.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function ac_dec25() {
    ?>
    <p>
        <img src="https://cdn.beyondeternal.com/tcg/events/2019/12/advent/be/be_advent19_17_tc_tp_euri.gif" />
    </p>
    <p>
        Tubes by: TC (closed), <a href="http://www.tatipixel.com/" target="_blank">TP</a>.
    </p>
    <hr />
    <p>
        <a href="https://2.bp.blogspot.com/-5dPrrUXPPcA/Xd_U_ew54mI/AAAAAAAAu2Y/q_XddBGp6skboi8lod8UuK039IrQwOnjwCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Annica.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-5dPrrUXPPcA/Xd_U_ew54mI/AAAAAAAAu2Y/q_XddBGp6skboi8lod8UuK039IrQwOnjwCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Annica.gif" data-original-width="211" data-original-height="289" /></a><a href="https://2.bp.blogspot.com/-3O_SWCiIUNo/Xd_U_Yq7nFI/AAAAAAAAu2U/agw4LAgskWkwbeBj4VC9WezYxIw9qhDfgCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Bella.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-3O_SWCiIUNo/Xd_U_Yq7nFI/AAAAAAAAu2U/agw4LAgskWkwbeBj4VC9WezYxIw9qhDfgCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Bella.gif" data-original-width="211" data-original-height="289" /></a><a href="https://4.bp.blogspot.com/-M-3k4UhEha8/Xd_U_Or_nlI/AAAAAAAAu2Q/gxF4GRqEqHkHea5kQE0Un8hBJ-Sq0V6EACLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Beth.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-M-3k4UhEha8/Xd_U_Or_nlI/AAAAAAAAu2Q/gxF4GRqEqHkHea5kQE0Un8hBJ-Sq0V6EACLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Beth.gif" data-original-width="211" data-original-height="289" /></a><a href="https://2.bp.blogspot.com/-nLorLeaQ_bs/Xd_VAVwtQrI/AAAAAAAAu2c/td_bCMtfMY0N3cITYCBVWv60IwNfK80cACLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Cris.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-nLorLeaQ_bs/Xd_VAVwtQrI/AAAAAAAAu2c/td_bCMtfMY0N3cITYCBVWv60IwNfK80cACLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Cris.gif" data-original-width="211" data-original-height="289" /></a><a href="https://1.bp.blogspot.com/-pdlm2KP410A/Xd_VAjs70VI/AAAAAAAAu2g/ACQqgx373W4_Ac29K2JzrU3_ufM6z-NFACLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Darlene.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-pdlm2KP410A/Xd_VAjs70VI/AAAAAAAAu2g/ACQqgx373W4_Ac29K2JzrU3_ufM6z-NFACLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Darlene.gif" data-original-width="211" data-original-height="289" /></a><a href="https://3.bp.blogspot.com/-qE2p4kGPU4M/Xd_VA-ja5PI/AAAAAAAAu2k/1Fx4BuGndVk--5C9DkDDRMtn3Y0qikx_QCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Heather.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-qE2p4kGPU4M/Xd_VA-ja5PI/AAAAAAAAu2k/1Fx4BuGndVk--5C9DkDDRMtn3Y0qikx_QCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Heather.gif" data-original-width="211" data-original-height="289" /></a><a href="https://1.bp.blogspot.com/-pS9k0ZmlY9I/Xd_VBATqhRI/AAAAAAAAu2o/67BdASEqCBwsYBCu3pz7vEO5nS4_c5NvQCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Inger.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-pS9k0ZmlY9I/Xd_VBATqhRI/AAAAAAAAu2o/67BdASEqCBwsYBCu3pz7vEO5nS4_c5NvQCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Inger.gif" data-original-width="211" data-original-height="289" /></a><a href="https://2.bp.blogspot.com/-h1kqrXANcL4/Xd_VB6YQP6I/AAAAAAAAu2s/Tz3K0PNMgr0LH2GgWETfGhfv7UxxXNOmQCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Julie.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-h1kqrXANcL4/Xd_VB6YQP6I/AAAAAAAAu2s/Tz3K0PNMgr0LH2GgWETfGhfv7UxxXNOmQCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Julie.gif" data-original-width="211" data-original-height="289" /></a><a href="https://4.bp.blogspot.com/-btGkPQIEGJE/Xd_VBwQembI/AAAAAAAAu2w/pumusYi5088LqTNx7LQDGu3VJjCbaaWZACLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Marcinha.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-btGkPQIEGJE/Xd_VBwQembI/AAAAAAAAu2w/pumusYi5088LqTNx7LQDGu3VJjCbaaWZACLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Marcinha.gif" data-original-width="211" data-original-height="289" /></a><a href="https://3.bp.blogspot.com/-4WVU04uwypw/Xd_VCEP-lSI/AAAAAAAAu20/Ky95IN-BLrk0QOCecma8FXO58R4s5vqCQCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Mely.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-4WVU04uwypw/Xd_VCEP-lSI/AAAAAAAAu20/Ky95IN-BLrk0QOCecma8FXO58R4s5vqCQCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Mely.gif" data-original-width="211" data-original-height="289" /></a><a href="https://3.bp.blogspot.com/-yVP9WIe--f4/Xd_VDDKdeaI/AAAAAAAAu24/vmS8f127kOAJ4Hp6Jy8_Gf7ThTIF4Y6PQCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Nicky.gif" imageanchor="1" ><img border="0" src="https://3.bp.blogspot.com/-yVP9WIe--f4/Xd_VDDKdeaI/AAAAAAAAu24/vmS8f127kOAJ4Hp6Jy8_Gf7ThTIF4Y6PQCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Nicky.gif" data-original-width="211" data-original-height="289" /></a><a href="https://2.bp.blogspot.com/-EjUPt9jp-eQ/Xd_VD-10qJI/AAAAAAAAu28/qsd_DBUa4jkPhQMR99VADl7xSXsYpVHAACLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Orella.gif" imageanchor="1" ><img border="0" src="https://2.bp.blogspot.com/-EjUPt9jp-eQ/Xd_VD-10qJI/AAAAAAAAu28/qsd_DBUa4jkPhQMR99VADl7xSXsYpVHAACLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Orella.gif" data-original-width="211" data-original-height="289" /></a><a href="https://1.bp.blogspot.com/-rGChCTOJ1Oc/Xd_VD5PQ0MI/AAAAAAAAu3A/NKfKkLBchbkkzFgLU1s_Rfo9YvXLRKf2QCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Sylvia.gif" imageanchor="1" ><img border="0" src="https://1.bp.blogspot.com/-rGChCTOJ1Oc/Xd_VD5PQ0MI/AAAAAAAAu3A/NKfKkLBchbkkzFgLU1s_Rfo9YvXLRKf2QCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Sylvia.gif" data-original-width="211" data-original-height="289" /></a><a href="https://4.bp.blogspot.com/-mpB7e4dIvrM/Xd_VEdNzVfI/AAAAAAAAu3E/Jn_oBLcbfuUH3sdHJUtsgUgBZptZigbQQCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Tami.gif" imageanchor="1" ><img border="0" src="https://4.bp.blogspot.com/-mpB7e4dIvrM/Xd_VEdNzVfI/AAAAAAAAu3E/Jn_oBLcbfuUH3sdHJUtsgUgBZptZigbQQCLcBGAsYHQ/s1600/be_advent19_17_tc_tp_Tami.gif" data-original-width="211" data-original-height="289" /></a>
    </p>
    <hr />
    <p>
        <strong>For Non-TCG Members,</strong><br />
        please click  <a href="https://beyond-eternal.blogspot.com/2019/12/advent-calendar-2019-dec-24.html" target="_blank">HERE</a>.
    </p>
    <?php
}

function too_early() {
    ?>
    <strong>Sorry! You are too early!</strong>
    <p>Please come back again.</p>
    <p>Current server time: <?php echo date("F d, Y H:i") ?> (UTC-0)</p>
    <p><img src="http://cdn.beyondeternal.com/sites/winter/advent/2015/fc/fc_ac15_21.gif" alt="" border="0" /></p>
    <p>Image above by <a href="http://www.fancycricket.net/" target="_blank">FC</a>.</p>
    <?php
}

function nothing() {
    ?>
    <strong>There's nothing here.</strong>
    <p><img src="http://cdn.beyondeternal.com/sites/winter/advent/2017/fpd/11dec2018_fpd.gif" alt="" border="0" /></p>
    <p>Image above by <a href="http://www.fantasticpixeldreams.at/pixelsite/fpd/index.htm" target="_blank">FPD</a>.</p>
    <?php } 
?>