// window.addEventListener("DOMContentLoaded",function(){
//     const mediaQuery = window.matchMedia('( max-width: 1365px )');
//     var count = 0;
//     if (mediaQuery.matches) {
//         document.getElementById("arr").style.transform = "rotate(0deg)";
//         arrow.addEventListener("click", function () {
//             document.getElementById("introdV2").style.display = "none";
//             document.getElementById("introdV1").style.display = "none";
//             count++;
//             originalDiv = document.getElementById("introdV1");
//             const newdiv = originalDiv.cloneNode(true);
//             if (count == 1) {
//                 newdiv.style.display = "flex";
//                 newdiv.style.backgroundColor = "black";
//                 newdiv.style.visibility = "visible";
//                 way = document.querySelector("#menu");
//                 way.insertBefore(newdiv, way.children[2]);
//                 document.getElementById("btn").style.border = "solid 2px rgb(238, 50, 113)";
//                 document.getElementById("arr").style.transform = "rotate(180deg)";
//             }
//             else if (count % 2 == 1) {
//                 document.getElementById("introdV1").style.display = "flex";
//                 document.getElementById("btn").style.border = "solid 2px rgb(238, 50, 113)";
//                 document.getElementById("arr").style.transform = "rotate(180deg)";
//             }
//             else {
//                 document.getElementById("introdV1").style.display = "none";
//                 document.getElementById("btn").style.border = "none";
//                 document.getElementById("btn").style.borderBottom = "solid 2px rgb(250, 40, 110)";
//                 document.getElementById("arr").style.transform = "rotate(0deg)";
//             }
//             if (count == 12) {
//                 count = 2;
//             }
//         });

//         let menu = document.querySelectorAll("#btn");
//         for (let i = 0; i <= menu.length; i++) {
//             menu[i].style.display = "none";
//         }
//     }
//     else {
//         arrow.addEventListener("click", function () {
//             count++;
//             document.getElementById("introdV1").style.display = "none";
//             if (count % 2 == 1) {
//                 document.getElementById("arr").style.transform = "rotate(180deg)";
//                 document.getElementById("btn").style.border = "solid 2px rgb(238, 50, 113)";
//                 document.getElementById("introdV2").style.visibility = "visible";
//                 document.getElementById("introdV2").style.display = "flex";
//                 document.getElementById("menu").style.filter = "none";
//             }
//             else {
//                 document.getElementById("arr").style.transform = "rotate(0deg)";
//                 document.getElementById("btn").style.border = "none";
//                 document.getElementById("btn").style.borderBottom = "solid 2px rgb(250, 40, 110)";
//                 document.getElementById("introdV2").style.visibility = "hidden";
//                 document.getElementById("introdV2").style.display = "none";
//                 document.getElementById("menu").style.filter = "drop-shadow(0 5px 4px rgb(131, 129, 129))";
//             }
//             if (count == 12) {
//                 count = 2;
//             }
//         });

//         let menu = document.querySelectorAll("#btn");
//         for (let i = 0; i <= menu.length; i++) {
//             menu[i].style.display = "flex";
//         }

//     }
// })

window.addEventListener("resize", function () {
    var arrow = document.getElementById("btn");
    var isclick = true;
    document.getElementById("introdV2").style.display = "none";
    document.getElementById("introdV1").style.display = "none";
    document.getElementById("btn").style.border = "none";
    document.querySelector(".ask").style.borderBottom = "solid 2px rgb(250, 40, 110)";
    const mediaQuery = window.matchMedia('( max-width: 1365px )');
    var count = 0;
    if (mediaQuery.matches) {
        document.getElementById("arr").style.transform = "rotate(0deg)";
        arrow.addEventListener("click", function () {
            document.getElementById("introdV2").style.display = "none";
            document.getElementById("introdV1").style.display = "none";
            count++;
            originalDiv = document.getElementById("introdV1");
            const newdiv = originalDiv.cloneNode(true);
            if (count == 1) {
                newdiv.style.display = "flex";
                newdiv.style.backgroundColor = "black";
                newdiv.style.visibility = "visible";
                way = document.querySelector("#menu");
                way.insertBefore(newdiv, way.children[2]);
                document.getElementById("btn").style.border = "solid 2px rgb(238, 50, 113)";
                document.getElementById("arr").style.transform = "rotate(180deg)";
            }
            else if (count % 2 == 1) {
                document.getElementById("introdV1").style.display = "flex";
                document.getElementById("btn").style.border = "solid 2px rgb(238, 50, 113)";
                document.getElementById("arr").style.transform = "rotate(180deg)";
            }
            else {
                document.getElementById("introdV1").style.display = "none";
                document.getElementById("btn").style.border = "none";
                document.querySelector(".ask").style.borderBottom = "solid 2px rgb(250, 40, 110)";
                document.getElementById("arr").style.transform = "rotate(0deg)";
            }
            if (count == 12) {
                count = 2;
            }
        });

        let menu = document.querySelectorAll("#btn");
        for (let i = 0; i <= menu.length; i++) {
            menu[i].style.display = "none";
        }
    }
    else {
        arrow.addEventListener("click", function () {
            count++;
            document.getElementById("introdV1").style.display = "none";
            if (count % 2 == 1) {
                document.getElementById("arr").style.transform = "rotate(180deg)";
                document.getElementById("btn").style.border = "solid 2px rgb(238, 50, 113)";
                document.getElementById("introdV2").style.visibility = "visible";
                document.getElementById("introdV2").style.display = "flex";
                document.getElementById("menu").style.filter = "none";
            }
            else {
                document.getElementById("arr").style.transform = "rotate(0deg)";
                document.getElementById("btn").style.border = "none";
                document.querySelector(".ask").style.borderBottom = "solid 2px rgb(250, 40, 110)";
                document.getElementById("introdV2").style.visibility = "hidden";
                document.getElementById("introdV2").style.display = "none";
                document.getElementById("menu").style.filter = "drop-shadow(0 5px 4px rgb(131, 129, 129))";
            }
            if (count == 12) {
                count = 2;
            }
        });

        let menu = document.querySelectorAll("#btn");
        for (let i = 0; i <= menu.length; i++) {
            menu[i].style.display = "flex";
        }

    }

});
// var bar = document.querySelector(".hamburger");
// bar.addEventListener('click', function () {
//     let menu = document.querySelectorAll("#btn");
//     for (let i = 0; i <= menu.length; i++) {
//         if (menu[i].style.display == "flex") {
//             menu[i].style.display = "none";
//             document.getElementById("introdV1").style.display = "none";
//             bar.style.transform = "rotate(0deg)";
//             document.getElementById("btn").style.border = "none";
//             document.querySelector(".ask").style.borderBottom = "solid 2px rgb(250, 40, 110)";
//             document.getElementById("btn").style.borderBottom = "solid 2px rgba(197, 197, 197, 0.233)";
//             count = 2;
//         }
//         else {
//             menu[i].style.display = "flex";
//             document.getElementById("arr").style.transform = "rotate(0deg)";
//             bar.style.transform = "scaleY(-1)";
//         }
//     }
// });

function Click() {
    let phone = document.getElementById("phone");
    let name = document.getElementById("name");
    let des = document.getElementById("desCount");
    let email = document.getElementById("email");
    let company = document.getElementById("company");
    let position = document.getElementById("position");
    let output = '';
    var phoneNumberRegex1 = /^0[2-8]\d{7}$/;
    var phoneNumberRegex2 = /^09\d{8}$/;
    var emailRegex = /^[a-zA-Z0-9-_]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
    var wordRegex = /[!@#$%^{}\[\]?+=]/;

    if (email.value == '') {
        email.style.border = 'solid 1px red';
        document.getElementById("emailSign").textContent = "此欄位需要填寫";
        document.getElementById("warnIconE").style.display = 'block';
        document.querySelector(".form > div:nth-child(6)").style.marginTop = '0px';
    }
    else {
        if (emailRegex.test(email.value)) {
            output += "Email：正確\n";
            email.style.border = 'none';
            email.style.borderBottom = "solid 1px black";
            document.getElementById("emailSign").textContent = "";
            document.getElementById("warnIconE").style.display = 'none';
            document.querySelector(".form > div:nth-child(6)").style.marginTop = '34px';
        }
        else {
            output += "Email：錯誤\n";
            email.style.border = 'solid 1px red';
            document.getElementById("emailSign").textContent = "格式錯誤";
            document.getElementById("warnIconE").style.display = 'block';
            document.querySelector(".form > div:nth-child(6)").style.marginTop = '0px';
        }

    }

    if (!wordRegex.test(company.value)) {
        company.style.border = 'none';
        company.style.borderBottom = "solid 1px black";
        document.getElementById("comSign").textContent = "";
    }
    else {
        company.style.border = 'solid 1px red';
        document.getElementById("comSign").textContent = "不能含有特殊字元";
    }

    if (phone.value == '') {
        phone.style.border = 'solid 1px red';
        document.getElementById("phoneSign").textContent = "此欄位需要填寫";
        document.getElementById("warnIconP").style.display = "block";
        document.querySelector(".form > div:nth-child(7)").style.marginTop = '0px';
    }
    else {
        if (phoneNumberRegex1.test(phone.value) || phoneNumberRegex2.test(phone.value)) {
            output += "電話：正確\n";
            phone.style.border = 'none';
            phone.style.borderBottom = "solid 1px black";
            document.getElementById("phoneSign").textContent = "";
            document.getElementById("warnIconP").style.display = 'none';
            document.querySelector(".form > div:nth-child(7)").style.marginTop = '20px';
        }
        else {
            output += "電話：錯誤\n";
            phone.style.border = 'solid 1px red';
            document.getElementById("phoneSign").textContent = "輸入電話號碼或家電";
            document.getElementById("warnIconP").style.display = "block";
            document.querySelector(".form > div:nth-child(7)").style.marginTop = '0px';
        }

    }

    if (name.value == '') {
        name.style.border = 'solid 1px red';
        document.getElementById("nameSign").textContent = "此欄位需要填寫";
        document.getElementById("warnIconN").style.display = 'block';
        document.querySelector(".form > div:nth-child(8)").style.marginTop = '25px';
    }
    else {
        if (!wordRegex.test(name.value)) {
            name.style.border = 'none';
            name.style.borderBottom = "solid 1px black";
            document.getElementById("nameSign").textContent = "";
            document.getElementById("warnIconN").style.display = 'none';
            document.querySelector(".form > div:nth-child(8)").style.marginTop = '42px';
        }
        else {
            name.style.border = 'solid 1px red';
            document.getElementById("nameSign").textContent = "不能含有特殊字元";
            document.getElementById("warnIconN").style.display = 'block';
            document.querySelector(".form > div:nth-child(8)").style.marginTop = '25px';
        }
    }

    if (!wordRegex.test(position.value)) {
        position.style.border = 'none';
        position.style.borderBottom = "solid 1px black";
        document.getElementById("posSign").textContent = "";
    }
    else {
        position.style.border = 'solid 1px red';
        document.getElementById("posSign").textContent = "不能含有特殊字元";
    }

    if (des.value == '') {
        des.style.border = 'solid 1px red';
        document.getElementById("desSign").textContent = "此欄位需要填寫";
        document.getElementById("warnIconD").style.display = 'block';
        document.querySelector(".form > div:nth-child(9)").style.marginTop = '8px';
    }
    else {
        if (document.getElementById("desCount").value.replace(/\([0-9]*\)/, '').replace(/\s/g, '').length<=300) {
            des.style.border = 'none';
            des.style.borderBottom = "solid 1px black";
            document.getElementById("desSign").textContent = "";
            document.getElementById("warnIconD").style.display = 'none';
            document.querySelector(".form > div:nth-child(9)").style.marginTop = '42px';
        }
        else {
            des.style.border = 'solid 1px red';
            document.getElementById("desSign").textContent = "超過300個字";
            document.getElementById("warnIconD").style.display = 'block';
            document.querySelector(".form > div:nth-child(9)").style.marginTop = '8px';
        }
    }
    window.alert(output);
}

function handleInput() {
    var inputValue = document.getElementById('desCount').value;
    var charCount = inputValue.replace(/\([0-9]*\)/, '').replace(/\s/g, '').length;
    if (charCount <= 300) {
        document.getElementById('count').style.color = "black";
    }
    else {
        document.getElementById('count').style.color = 'red';
    }
    document.getElementById('count').textContent = charCount;
}




