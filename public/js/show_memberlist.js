var member_list_hinata = [
    "潮紗理菜",
    "影山優佳",
    "加藤史帆",
    "金村美玖",
    "上村ひなの",
    "河田陽菜",
    "小坂菜緒",
    "齊藤京子",
    "佐々木久美",
    "佐々木美玲",
    "高瀬愛奈",
    "髙橋未来虹",
    "高本彩花",
    "富田鈴花",
    "丹生明里",
    "濱岸ひより",
    "東村芽依",
    "松田好花",
    "宮田愛萌",
    "渡邉美穂"];
var member_list_sakura = [
    "井上梨名",
    "上村莉菜",
    "遠藤光莉",
    "大園玲",
    "大沼晶保",
    "尾関梨香",
    "小池美波",
    "幸坂茉里乃",
    "小林由依",
    "齋藤冬優花",
    "菅井友香",
    "関有美子",
    "武元唯依",
    "田村保乃",
    "土生瑞穂",
    "原田葵",
    "藤吉夏鈴",
    "増本綺良",
    "松田里奈",
    "森田ひかる",
    "守屋茜",
    "守屋麗奈",
    "山﨑天",
    "渡辺梨加",
    "渡邉理佐"];

function update_options(){
    var name = document.getElementById("name");
    var groupname = document.getElementById("teamname").value;

    var update_group = groupname;

    if(update_group==""){
        name.textContent = null;
        var el = document.createElement("option");
        el.value = "none";
        el.text = "選択してください";
        name.appendChild(el);
    }else if(update_group=="hinata"){
        name.textContent = null;
        for(var i=0;i<member_list_hinata.length;i++){
            var el = document.createElement("option");
            el.value = member_list_hinata[i];
            el.text = member_list_hinata[i];
            name.appendChild(el);
        }
        //show_hinatalist();
    }else if(update_group=="sakura"){
        name.textContent = null;
        for(var k=0;k<member_list_sakura.length;k++){
            var el = document.createElement("option");
            el.value = member_list_sakura[k];
            el.text = member_list_sakura[k];
            name.appendChild(el);
        }
        //show_sakuralist();
    }
}
// function show_hinatalist(){
//     for(var i=0;i<member_list_hinata.length;i++){
//         var el = document.createElement("option");
//         el.value = member_list_hinata[i];
//         el.text = member_list_hinata[i];
//         name.appendChild(el);
//     }
// }
// function show_sakuralist(){
//     for(var k=0;k<member_list_sakura.length;k++){
//         var el = document.createElement("option");
//         el.value = member_list_sakura[k];
//         el.text = member_list_sakura[k];
//         name.appendChild(el);
//     }
// }
