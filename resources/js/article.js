import { createApp } from 'vue/dist/vue.esm-bundler';

createApp({
    data() {
        return {
            selectType: 'Параграф',
            text: '',
            content: [],
            lastId: 0
        };
    },
    methods: {
        addText() {
            this.content.push({
                "id": this.lastId++,
                "type": this.selectType,
                "content": this.text
            });

            this.selectType = 'Параграф';
            this.text = '';
        }
    }
}).mount('#application');
