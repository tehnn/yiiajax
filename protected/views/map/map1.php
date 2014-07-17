<?php
Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile('https://maps.googleapis.com/maps/api/js?v=3.exp&language=th');
?>
<div id="map-canvas" style="width: 600px;height: 450px;border: solid;border-width: 1px">
    บริเวณแสดงผล Map
</div>
<script>
    var map = new google.maps.Map(document.getElementById("map-canvas"),{
        center: new google.maps.LatLng(16, 100), // พิกัดกึ่งกลางแผนที่
        zoom: 8
    }
    );
</script>
