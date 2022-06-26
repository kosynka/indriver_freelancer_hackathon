<template>
    <graph-line-timerange
            :width="600"
            :height="400"
            :axis-min="0"
            :axis-max="100"
            :axis-reverse="false"
            :axis-format="'HH:mm'"
            :axis-interval="1000 * 60 * 60 * 8"
            :labels="labels"
            :values="values">
        <note :text="'Line Chart'"></note>
        <guideline :tooltip-x="true" :tooltip-y="true"></guideline>
    </graph-line-timerange>
</template>

<script>
    
</script>
