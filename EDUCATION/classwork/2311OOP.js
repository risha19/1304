
"use strict";

//class User {
//    constructor(name, lastname, birthday, role) { ///метод, вызываемый при создании экземпляра класса
//       this.name = name; //описываем свойство
//       this.lastname = lastname;
//       this.birthday = birthday;
//       this.role = role;
//       
//       
//       //можно создать через переменные
//       let today = new Date();
//       let age = today.getYear() - this.birthday.getYear();
//       this.age = age; 
//    }  
//    
//    get name() {//ф-я отрабатывает, когда мы собираемся считать св-во 
//        return this._name[0].toUpperCase() + this._name.slice(1);
//    }
//    
//    set name(value) {//отрабатывает, когда мы собираемся записать новое значение в св-во
//        if (typeof(value) != "string") {
//            return alert("Неверный тип данных");
//        }
//        if (value.length < 3) {
//            return alert("Слишком короткое имя");
//        }
//        this._name = value;
//    }
//    
//    getFullName() { //создаем метод, возвращающий полное имя
//        return this.name + " " + this.lastname;
//    }
//    
//    sayHi() { //создаем метод
//        alert("Добрый день, " + this.name);
//    }
//}
//
//let user1 = new User("Василий", "Петров", new Date("1987-11-23"), "admin"); //создание экземпляра класса
//let user2 = new User("Сергей", "Васильев", new Date("1980-06-13"), "user");
////user1.sayHi();
////console.log(user1.age);
////user2.sayHi();
////console.log(user2.age);
////user1.name = "Иван";
////console.log(user1.getFullName());
//user1.name = "Ян";
////user1.name = "Василий";
////console.log(user1.name);


//class Animal {
//    constructor(nick, gender, age, weight) {
//        this.nick = nick;
//        this.gender = gender;
//        this.age = age;
//        this.weight = weight;
//        
//    }
//    eat() {
//        this.weight += 1;
//        console.log("Хрум, хрум");
//    }
//    
//    run() {
//        this.weight -= 1;
//        console.log(`${this.nick} бежит`);
//    }
//    
//    sleep() {
//        console.log(`${this.nick} спит`);
//    }
//}
//
//class Rabbit extends Animal {
//    hop() {
//        this.weight -= 1;
//        return `${this.nick} прыгает`;
//    }
//};
//
//class Horse extends Animal {
//    constructor(nick, gender, breed, age, weight) {
//       super(nick, gender, age, weight);//вызывает конструктор родителя
//       this.breed = breed;
//    }
//    run() {
//        super.run();//вызываем родительский метод
//        console.log(`${this.nick} делает тыг-дык тыг-дык`);
//    }
//};
//
//
//let rabbit = new Rabbit("Крош", "М", 3, 4);
//console.log(rabbit.eat());
//console.log(rabbit.run());
//console.log(rabbit.weight);
//
//let horse = new Horse("Фелл", "М","Рысак", 7, 500);
//console.log(horse.run());
//console.log(horse);

//-----------Инкапсуляция--------------
//Приватные и защищенные методы и свойства
//модификаторы доступа
// pablic - рубличные свойства и методы
//private - приватные свойства и методы, доступны внутри текущего класса
//protected - защищенные свойства и методы, доступны внутри класса и наследников

//class CoffeeMachine {
//    constructor() {
//        this._waterAmount = 0;//защищенное свойство
//        this._power = "100W";
//    }
//    set waterAmount(value) {
//        if(value < 0) console.error("Нельзя налить отрицательное количество воды");
//        this._waterAmount += value;
//    }
//    get waterAmount() {
//        return this._waterAmount;
//    }
//    get power() {
//        return this._power;//без set только для чтения
//    }
//    
//}
//
// let coffeeMachine = new CoffeeMachine();
// coffeeMachine.waterAmount = -500;
// coffeeMachine.waterAmount = 200;
// console.log(coffeeMachine.waterAmount);
// coffeeMachine._power = "70W";
//
//
////----------------Статичные методы
////-------------------Это свойства и методы, которые могут быть созданы без создания класса
////прим. Math.round();
//
//class MyAwesomeLibrary {
//    static autor = "Василий Петров";
//    
//    static MyAwesomeFunction(){
//        console.log("Была вызвана очень полезная функция");
//    }
//}
//
//console.log(MyAwesomeLibrary.autor);
//MyAwesomeLibrary.MyAwesomeFunction;

//Пример использования классов

 let catalog = [
      {id: 1, name: "Яблоко", price: "40", description: " Сочное  яблоко ", image: "http://www.gilmerfreepress.net/images/upload1/AppleGreen02.png"},
      {id: 2, name: "Банан", price: "80", description: "Вкусный желтый банан", image: "https://im0-tub-ru.yandex.net/i?id=745c9ede018c0b0004cea9418a34d059-sr&n=13"},
      {id: 3, name: "Мандарин", price: "150", description: "Отличный мандарин", image: "https://w7.pngwing.com/pngs/422/901/png-transparent-fruit-salad-blog-juste-un-lascar-orange-food-orange-citrus-thumbnail.png"},
      {id: 4, name: "Виноград", price: "130", description: "Веселый виноград", image: "https://img.lovepik.com/element/40049/4932.png_300.png"},
      {id: 5, name: "Арбуз", price: "300", description: "Компанейский арбуз", image: "https://lh3.googleusercontent.com/u7wGIGK1UQBsePYnXbu7fLATYXZbCG5Ps-iveovDVJbPU2otq2-j4JD-10oOE1cwhFA=w300"},
    ];
    
    class ProductCard {
        constructor(id, name, price, description, image) {
            this.id = id;
            this.name = name;
            this.price = price;
            this.description = description;
            this.image = image;
        }
        render() {
            this.elem = document.createElement("div");
            this.elem.className = "col-4 mt-3";
            this.elem.innerHTML = `
              <div class="card">
                <img class="card-img-top" src="${this.image}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">${this.name}</h5>
                 <h6>${this.price} руб.</h6>
                  <p class="card-text">${this.description}</p>
                  <div class="card-body-buttons">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-secondary text-white font-weight-bold minus-button">-</button>
                      </div>
                      <input type="text" class="form-control text-center font-weight-bold counter" value="0" disabled>
                      <div class="input-group-append">
                        <button class="btn btn-secondary text-white font-weight-bold plus-button">+</button>
                      </div>
                    </div>
                    <button class="btn btn-primary ml-2">Заказать</button>
                  </div>
                </div>
              </div>  
            `;
        let catalog = document.querySelector(".catalog");
        catalog.append(this.elem);
        
        let minusButton = this.elem.querySelector(".minus-button");
         let plusButton = this.elem.querySelector(".plus-button");
        minusButton.addEventListener("click", this.minus.bind(this));
        //.bind(object) привязывает object как this внутри функции (уч. 1 часть - 6.10)
        plusButton.addEventListener("click", this.plus.bind(this));
        
        }
        
        set amount(value) {
            if(value < 0) return;
            let counter = this.elem.querySelector(".counter");
            this._amount = value;  
            counter.value = this._amount;

        }

        get amount() {
            return this._amount;
        }
        
        plus() {
            this.amount += 1;
        }
        minus() {
            this.amount -= 1;
        }
    }
    
    
    
    createCards(catalog);
    
    function createCards(cards) {
        for (let card of cards) {
            let productCard = new ProductCard(card.id, card.name, card.price, card.description, card.image);
            productCard.render();
        }
    }