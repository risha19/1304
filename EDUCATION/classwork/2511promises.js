"use strict";

class TrafficLight {
    constructor(elem) {
        this.elem = elem;
        this.redLightElem = this.elem.querySelector(".red");
        this.yellowLightElem = this.elem.querySelector(".yellow");
        this.greenLightElem = this.elem.querySelector(".green");
        
        this.redTime = 10000;
        this.yellowTime = 1000;
        this.greenTime = 2000;
        
        this.power = false;
        
    }
    powerOn() {
        this.power = true;
    }
    
    powerOff() {
        this.power = false;
        this.redLightElem.style.backgroundColor = "";
        this.yellowLightElem.style.backgroundColor = "";
        this.greenLightElem.style.backgroundColor = "";
        
    }
    
    startWorking() {
//        this.turnRed();
//        setTimeout(() => {
//          this.turnYellow();
//          setTimeout(() => {
//            this.turnGreen();
//            setTimeout(() => {
//              this.turnYellow();
//              setTimeout(() => {
//                this.startWorking();
//              }, this.yellowTime);
//            }, this.greenTime);
//          }, this.yellowTime);
//        }, this.redTime);
        if(!this.power ) return;
        
        this.turnRed()
            .then(() => {return this.turnYellow();})
            .then(() => {return this.turnGreen();})
            .then(() => this.turnYellow())// аналогично записи с ретёрн
            .then(() => this.startWorking());
  }
    
    turnRed() {
        return new Promise((resolve, reject) => {
           this.redLightElem.style.backgroundColor = "red";
           this.yellowLightElem.style.backgroundColor = "";
           this.greenLightElem.backgroundColor = "";
           
           let counter = this.redLightElem.querySelector(".counter");
           counter.style.display = "block";
           counter.innerHTML = this.redTime/1000;
           
           let counterInterval = setInterval(() => {
             counter.innerHTML--;   
             if(counter.innerHTML == 0) {
                 resolve();
                 counter.style.display = "";
                 clearInterval(counterInterval);
             }
            }, 1000);
        });
    }
    
    turnYellow() {
        return new Promise((resolve, reject) => {
            this.redLightElem.style.backgroundColor = "";
            this.yellowLightElem.style.backgroundColor = "yellow";
            this.greenLightElem.style.backgroundColor = "";
            setTimeout(() => {
                resolve();
            }, this.yellowTime);
        });
    }
    
    turnGreen() {
        return new Promise((resolve, reject) => {
            this.redLightElem.style.backgroundColor = "";
            this.yellowLightElem.style.backgroundColor = "";
            this.greenLightElem.style.backgroundColor = "green";
            setTimeout(() => {
                resolve();
            }, this.greenTime);
        });
    }    
}

let trafficLight = new TrafficLight(document.querySelector(".box"));
trafficLight.powerOn();
trafficLight.startWorking();

function calculate(a, b) {
    return new Promise(function (resolve, reject) {
        console.log("Промис начал работу");
       //resolve()  - промис выполнился успешно
       //reject()  - промис завершился с ошибкой   
       setTimeout(() => {
           if(a + b > 0) {
                resolve(a + b);//значение в скобках = как результат промиса
           } else {
               reject(a + b);
           }
       }, 2000);
 });
}
calculate(10, 10)
        .then((result) => {console.log("Промис завершился успешно" + result);})//ловим resolve
        .catch((result) => {console.error("Промис завершился с ошибкой, сумма вышла <= 0" + result);}) //ловим reject
        .finally(() => {console.log("Промис завершил работу");});

//Движение машинки

let car = document.querySelector(".car");
startDrive();
function startDrive() {
  driveToEnd()
    .then(() => teleportCar())
    .then(() => driveToStart())
    .then(() => startDrive());
}
function driveToEnd() {
  return new Promise((res, rej) => {
    car.style.transition = "all 4s linear";
    car.style.left = "100%";
    car.ontransitionend = () => {
      res();
      car.ontransitionend = null;
    };
  });
}

function teleportCar() {
  return new Promise((res, rej) => {
    car.style.transition = "none";
    car.style.left = (0 - car.getBoundingClientRect().width) + "px";
    setTimeout(() => {
      res();
    }, 30);
  });
}

function driveToStart() {
  return new Promise((res, rej) => {
    car.style.transition = "all 1s linear";
    car.style.left = 0;
    car.ontransitionend = () => {
      res();
      car.ontransitionend = null;
    };
  });
}
