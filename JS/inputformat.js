let element1 = document.querySelector("#in_price");
let input1 = "";

element1.addEventListener("keydown", function (event) {
  event.preventDefault();

  if (event.key === "Backspace" && input1.length > 0) {
    input1 = input1.slice(0, input1.length - 1);
    element1.value = formatNumber(input1);
    return;
  }

  let allowedKeys = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
  
  if (allowedKeys.includes(event.key)) {
    input1 += event.key;
    element1.value = formatNumber(input1);
  }
});

function formatNumber (value) {
  let num = Number(value);
 
  if (isNaN(num)) {
    return "0.00";
  }
  return (num / 100).toFixed(2);
}
