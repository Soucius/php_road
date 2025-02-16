<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ve JS</title>
</head>
<body>
    <div id="app">
        <input type="text" v-model="group_name"> <br>
        <button type="button" @click.prevent.stop="ekle">Ekle</button>

        <div v-if="eklenenler">
            <ul>
                <li v-for="eklenen in eklenenler" :key="eklenen.id">{{ eklenen.name }}</li>
            </ul>
        </div>
    </div>
    
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.8/axios.min.js" integrity="sha512-v8+bPcpk4Sj7CKB11+gK/FnsbgQ15jTwZamnBf/xDmiQDcgOIYufBo6Acu1y30vrk8gg5su4x0CG3zfPaq5Fcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="app.js"></script>
</body>
</html>