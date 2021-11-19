var member_list_hinata = [
    "加藤史帆",
    "佐々木美玲"];
var member_list_sakura = [
    "菅井友香",
    "増本綺良"];

function update_options(){
    var name = document.getElementById("name");
    var groupname = document.getElementById("groupname").value;

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
