<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Draw and Modify Features</title>
    <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=fetch,requestAnimationFrame,Element.prototype.classList,URL"></script>
    <style>
      .map {
        width: 100%;
        height:400px;
      }
    </style>
  </head>
  <body>
    <div id="map" class="map"></div>
    <form class="form-inline">
      <label>Geometry type &nbsp;</label>
      <select id="type">
        <option value="Point">Point</option>
        <option value="LineString">LineString</option>
        <option value="Polygon">Polygon</option>
        <option value="Circle">Circle</option>
      </select>
    </form>
    <script src="js/map.js"></script>
  </body>
</html>