import Bdata from './bunpo_data.json' assert{type: 'json'};
data_Outline_Bdata();


function data_Outline_Bdata(){
    const according_body = document.querySelectorAll('.accordion-body');
    for(let i = 0; i < Bdata.length; i++){
        const bunpo_content = document.createElement('div');
        bunpo_content.innerHTML = `
            <div class="bunpo-body">
                <h4 class="text-center">${Bdata[i].grammaTitle}</h4>
                <span>${Bdata[i].mean}</span>
                <br>
                <span>${Bdata[i].usage}</span>
                <p>${Bdata[i].example}</p>

                <div><a href="#" id="test_yechish">  Test Yechib ko'ring</a>
                    <div id="test"></div>
                </div>
            </div>
        `;
        according_body[i].append(bunpo_content);
    };
};
let test_yechish  = document.getElementById('test_yechish');
test_yechish.addEventListener('click', ()=>{
    test_yechish.classList.toggle("test_yechish");
    let div_test = document.getElementById('test');
    div_test.innerHTML = `
        <p>私はものです<p>
        <p>私は人です</p>
        <p>私は動物です<p>
        `;
})

import Kdata from './kanji_data.json' assert{type: 'json'}
data_Outline_Kdata();

function data_Outline_Kdata(){
    const tab_pane = document.getElementById('contact');
    for(let i = 0; i < Kdata.length; i++){
        const div = document.createElement('div');
        div.innerHTML = `
            <div class="kanji border p-4">${Kdata[i].kanji}</div>
        `;
        tab_pane.appendChild(div)
    }
}

