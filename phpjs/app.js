const app = new Vue({
    el: '#app',
    data: {
        group_name: '',
        eklenenler: []
    },
    methods: {
        ekle() {
            const formData = new FormData();

            formData.append("groupname", this.group_name);
            axios.post("server.php?islem=addgroup", formData).then(res => {
                this.eklenenler.push({id: res.data.data.id, name: res.data.data.name});
            }).catch(err => console.log(err));
        }
    }
});