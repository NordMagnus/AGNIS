const hello = 'I am never used';

doesNotExist.nope(`I'm never imported`);

class widget extends React.Component { }

const joe = function () { };

const wes = 100;

function wesFunc() {

}

console.log('test');

function anotherFunc() {
  let variable = null;
  const aConstant = "test";
  const internalFunc = () => {
    if (a < 32 && b === 0) {
      // This is a comment
      doStuff();
    }
  }
  return "good";
}

anotherFunc.internalFunc();
anotherFunc.variable.test();

const arrowWes = () => { };

console.log(joe, wes);


class MyClass extends BaseClass {

  constructor() {
    this._privateVar = 43;
  }

  methodA(param1) {
    return param1 ** 2;
  }

  methodB(param1, param2) {
    return this.methodA(param1 > param2 ? param1 : param2);
  }
}
