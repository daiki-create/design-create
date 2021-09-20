// メガメニューのホバー
new Vue({
    el: '#header',
    data: {
        is_mega_show: false,
        is_mobile_show: false,
    },
    components: {
        // ヘッダーメニューのコンポーネント
        head_link: {
            data: function(){
                return{
                    is_show_mega: false,
                    is_now: false,
                }
            },
            props:[
                'ja',
                'en',
                'url',
                'now'
            ],
            template: `
                <a :href="url" class="header__link show_meganav" @mouseover="mouseover" :class="{ 'header__link_now': is_now }">
                    <span class="header__link_ja">{{ ja }}</span>
                    <span class="header__link_en">{{ en }}</span>
                </a>`,
            methods: {
                mouseover: function(){
                    this.$emit('meganav_action');
                },
            },
            mounted: function(){
                this.is_now = this.now;
            }
        }
    },
    methods: {
        // メガメニューのひょうじ・非表示
        show_meganav(){
            this.is_mega_show = true;
        },
        hide_meganav: function(){
            this.is_mega_show = false;
        },
        click_hum: function(){
            this.is_mobile_show = !this.is_mobile_show;
        },
    },
})