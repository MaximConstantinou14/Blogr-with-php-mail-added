
//Dropdown Functions
const productDropdownF = () => {
    const product = document.querySelector('.product');
    const productDropdown = document.querySelector('.product__dropdown');
    const arrow = document.querySelector('.arrow__one')

    product.addEventListener('click' , () =>{
        productDropdown.classList.toggle('product__dropdown__active');
        arrow.classList.toggle('arrow__rotated')
    });

}

const companyDropdownF = () => {
    const company = document.querySelector('.company');
    const companyDropdown = document.querySelector('.company__dropdown');
    const arrow = document.querySelector('.arrow__two')

    company.addEventListener('click' , () =>{
        companyDropdown.classList.toggle('company__dropdown__active');
        arrow.classList.toggle('arrow__rotated')
    });
}

const connectDropdownF = () => {
    const connect = document.querySelector('.connect');
    const connectDropdwon = document.querySelector('.connect__dropdown');
    const arrow = document.querySelector('.arrow__three')

    connect.addEventListener('click' , () =>{
        connectDropdwon.classList.toggle('connect__dropdown__active');
        arrow.classList.toggle('arrow__rotated')
    });
}

//Product Pointer Functions

const productItemPointerOne = () => {
    const product = document.querySelector('.product');
    const productItemLink1 = document.getElementById('product__item__link1');

    product.addEventListener('click' , () =>{
        productItemLink1.classList.toggle('product__item__link__active');
    });
}

const productItemPointerTwo = () => {
    const product = document.querySelector('.product');
    const productItemLink2 = document.getElementById('product__item__link2');

    product.addEventListener('click' , () =>{
        productItemLink2.classList.toggle('product__item__link__active');
    });
}

const productItemPointerThree = () => {
    const product = document.querySelector('.product');
    const productItemLink3 = document.getElementById('product__item__link3');

    product.addEventListener('click' , () =>{
        productItemLink3.classList.toggle('product__item__link__active');
    });
}

const productItemPointerFour = () => {
    const product = document.querySelector('.product');
    const productItemLink4 = document.getElementById('product__item__link4');

    product.addEventListener('click' , () =>{
        productItemLink4.classList.toggle('product__item__link__active');
    });
}

const productItemPointerFive = () => {
    const product = document.querySelector('.product');
    const productItemLink5 = document.getElementById('product__item__link5');

    product.addEventListener('click' , () =>{
        productItemLink5.classList.toggle('product__item__link__active');
    });
}

//Company Pointer Functions

const companyItemPointerOne = () => {
    const company = document.querySelector('.company');
    const companyItemLink1 = document.getElementById('company__item__link1');

    company.addEventListener('click' , () =>{
        companyItemLink1.classList.toggle('company__item__link__active');
    });
}

const companyItemPointerTwo = () => {
    const company = document.querySelector('.company');
    const companyItemLink2 = document.getElementById('company__item__link2');

    company.addEventListener('click' , () =>{
        companyItemLink2.classList.toggle('company__item__link__active');
    });
}

const companyItemPointerThree = () => {
    const company = document.querySelector('.company');
    const companyItemLink3 = document.getElementById('company__item__link3');

    company.addEventListener('click' , () =>{
        companyItemLink3.classList.toggle('company__item__link__active');
    });
}

const companyItemPointerFour = () => {
    const company = document.querySelector('.company');
    const companyItemLink4 = document.getElementById('company__item__link4');

    company.addEventListener('click' , () =>{
        companyItemLink4.classList.toggle('company__item__link__active');
    });
}

//Connect Pointer Functions

const connectItemPointerOne = () => {
    const connect = document.querySelector('.connect');
    const connectItemLink1 = document.getElementById('connect__item__link1');

    connect.addEventListener('click' , () =>{
        connectItemLink1.classList.toggle('connect__item__link__active');
    });
}

const connectItemPointerTwo = () => {
    const connect = document.querySelector('.connect');
    const connectItemLink2 = document.getElementById('connect__item__link2');

    connect.addEventListener('click' , () =>{
        connectItemLink2.classList.toggle('connect__item__link__active');
    });
}

const connectItemPointerThree = () => {
    const connect = document.querySelector('.connect');
    const connectItemLink3 = document.getElementById('connect__item__link3');

    connect.addEventListener('click' , () =>{
        connectItemLink3.classList.toggle('connect__item__link__active');
    });
}

//Burger Options

const burgerOptionOne = () => {
    const productDropdownBrgr = document.querySelector('.product__dropdown__brgr')
    const productBrgr = document.querySelector('.product__brgr')
    const arrow = document.querySelector('.arrow__brgr__one')

    productBrgr.addEventListener('click' , () =>{
        productDropdownBrgr.classList.toggle('product__dropdown__brgr__show');
        arrow.classList.toggle('arrow__rotated')
    });
}

const burgerOptionTwo = () => {
    const companyDropdownBrgr = document.querySelector('.company__dropdown__brgr')
    const companyBrgr = document.querySelector('.company__brgr')
    const arrow = document.querySelector('.arrow__brgr__two')

    companyBrgr.addEventListener('click' , () =>{
        companyDropdownBrgr.classList.toggle('company__dropdown__brgr__show');
        arrow.classList.toggle('arrow__rotated')
    });
}

const burgerOptionThree = () => {
    const connectDropdownBrgr = document.querySelector('.connect__dropdown__brgr')
    const connectBrgr = document.querySelector('.connect__brgr')
    const arrow = document.querySelector('.arrow__brgr__three')

    connectBrgr.addEventListener('click' , () =>{
        connectDropdownBrgr.classList.toggle('connect__dropdown__brgr__show');
        arrow.classList.toggle('arrow__rotated')
    });
}

//Burger Menu 

const burgerMenuF = () => {
    const burgerbtn = document.querySelector('.burger__btn')
    const burgerMenu = document.querySelector('.burger__menu')

    burgerbtn.addEventListener('click' , () =>{
        burgerMenu.classList.toggle('burger__menu__show');
    });

}


// Invoking Functions 


//Invoking Dropdown Functions
productDropdownF();
companyDropdownF();
connectDropdownF();

//Invoking Product Pointer Functions
productItemPointerOne();
productItemPointerTwo();
productItemPointerThree();
productItemPointerFour();
productItemPointerFive();

//Invoking Company Pointer Functions
companyItemPointerOne();
companyItemPointerTwo();
companyItemPointerThree();
companyItemPointerFour();

//Invoking Connect Pointer Functions
connectItemPointerOne();
connectItemPointerTwo();
connectItemPointerThree();

//Invoking Burger Options
burgerOptionOne();
burgerOptionTwo();
burgerOptionThree();

//Invoking Burger Menu
burgerMenuF();


