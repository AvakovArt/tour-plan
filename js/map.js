$(document).ready(function () {
  const map = document.querySelector(".map");
  map.addEventListener("click", () => {
    map.innerHTML = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6273.401542784063!2d98.29946262515972!3d7.895612426558279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30503a96a80e1833%3A0x40223bc2c382480!2z0J_QsNGC0L7QvdCzLCBLYXRodSBEaXN0cmljdCwg0J_RhdGD0LrQtdGCLCDQotCw0LjQu9Cw0L3QtA!5e0!3m2!1sru!2s!4v1596700208561!5m2!1sru!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>`;
  });
});
