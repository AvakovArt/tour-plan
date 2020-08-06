$(document).ready(function () {
  const map = document.querySelector(".map");
  map.addEventListener("mousemove", () => {
    map.innerHTML = `<script type="text/javascript">
ymaps.ready(init);

function init() {
  var myMap = new ymaps.Map("map", {
    center: [7.890846, 98.294736],
    zoom: 12,
  });
}
    </script >`;
  });
});
