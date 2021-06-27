// require('./bootstrap');

// window.Vue = require('vue');

// import VueRouter from 'vue-router';
// import VueAxios from 'vue-axios';
// import axios from 'axios';
// import App from './components/App.vue';
// import VueSweetalert2 from 'vue-sweetalert2';
// // If you don't need the styles, do not connect
// import 'sweetalert2/dist/sweetalert2.min.css';


// Vue.use(VueRouter);
// Vue.use(VueSweetalert2);
// Vue.use(VueAxios, axios);

// import JenispenyakitIndex from './components/JenispenyakitIndex.vue';
// import JenispenyakitCreate from './components/JenispenyakitCreate.vue';
// import JenispenyakitShow from './components/JenispenyakitShow.vue';
// import JenispenyakitEdit from './components/JenispenyakitEdit.vue';

// import SuasanahatiIndex from './components/SuasanahatiIndex.vue';
// import SuasanahatiCreate from './components/SuasanahatiCreate.vue';
// import SuasanahatiShow from './components/SuasanahatiShow.vue';
// import SuasanahatiEdit from './components/SuasanahatiEdit.vue';

// import MenuhidanganIndex from './components/MenuhidanganIndex.vue';
// import MenuhidanganCreate from './components/MenuhidanganCreate.vue';
// import MenuhidanganShow from './components/MenuhidanganShow.vue';
// import MenuhidanganEdit from './components/MenuhidanganEdit.vue';

// import MenusuasanahatiIndex from './components/MenusuasanahatiIndex.vue';
// import MenusuasanahatiCreate from './components/MenusuasanahatiCreate.vue';
// import MenusuasanahatiShow from './components/MenusuasanahatiShow.vue';
// import MenusuasanahatiEdit from './components/MenusuasanahatiEdit.vue';

// import MenujenispenyakitIndex from './components/MenujenispenyakitIndex.vue';
// import MenujenispenyakitCreate from './components/MenujenispenyakitCreate.vue';
// import MenujenispenyakitShow from './components/MenujenispenyakitShow.vue';
// import MenujenispenyakitEdit from './components/MenujenispenyakitEdit.vue';

// import PesananIndex from './components/PesananIndex.vue';
// import PesananCreate from './components/PesananCreate.vue';
// import PesananShow from './components/PesananShow.vue';
// import PesananEdit from './components/PesananEdit.vue';



// import HistorypesananIndex from './components/HistorypesananIndex.vue';
// import HistorypesananCreate from './components/HistorypesananCreate.vue';
// import HistorypesananShow from './components/HistorypesananShow.vue';
// import HistorypesananEdit from './components/HistorypesananEdit.vue';

// import DatalatihIndex from './components/DatalatihIndex.vue';
// import DatalatihCreate from './components/DatalatihCreate.vue';
// import DatalatihShow from './components/DatalatihShow.vue';
// import DatalatihEdit from './components/DatalatihEdit.vue';


// const routes = [

//     //jenis penyakit
//     {
//         name: 'homeJenispenyakit',
//         path: '/jenispenyakit',
//         component: JenispenyakitIndex
//     },
//     {
//         name: 'createJenispenyakit',
//         path: '/jenispenyakit/create',
//         component: JenispenyakitCreate
//     },
//     {
//         name: 'editJenispenyakit',
//         path: '/jenispenyakit/edit/:id',
//         component: JenispenyakitEdit
//     },
//     {
//         name: 'showJenispenyakit',
//         path: '/jenispenyakit/show/:id',
//         component: JenispenyakitShow
//     },

//     //suasana hati
//     {
//         name: 'homeSuasanahati',
//         path: '/suasanahati',
//         component: SuasanahatiIndex
//     },
//     {
//         name: 'createSuasanahati',
//         path: '/suasanahati/create',
//         component: SuasanahatiCreate
//     },
//     {
//         name: 'editSuasanahati',
//         path: '/suasanahati/edit/:id',
//         component: SuasanahatiEdit
//     },
//     {
//         name: 'showSuasanahati',
//         path: '/suasanahati/show/:id',
//         component: SuasanahatiShow
//     },



//     //menu hidangan
//     {
//         name: 'homeMenuhidangan',
//         path: '/menuhidangan',
//         component: MenuhidanganIndex
//     },
//     {
//         name: 'createMenuhidangan',
//         path: '/menuhidangan/create',
//         component: MenuhidanganCreate
//     },
//     {
//         name: 'editMenuhidangan',
//         path: '/menuhidangan/edit/:id',
//         component: MenuhidanganEdit
//     },
//     {
//         name: 'showMenuhidangan',
//         path: '/menuhidangan/show/:id',
//         component: MenuhidanganShow
//     },


//     //menu jenis penyakit
//     {
//         name: 'homeMenujenispenyakit',
//         path: '/menujenispenyakit',
//         component: MenujenispenyakitIndex
//     },
//     {
//         name: 'createMenujenispenyakit',
//         path: '/menujenispenyakit/create',
//         component: MenujenispenyakitCreate
//     },
//     {
//         name: 'editMenujenispenyakit',
//         path: '/menujenispenyakit/edit/:id',
//         component: MenujenispenyakitEdit
//     },
//     {
//         name: 'showMenujenispenyakit',
//         path: '/menujenispenyakit/show/:id',
//         component: MenujenispenyakitShow
//     },

//     //menu suasana hati
//     {
//         name: 'homeMenusuasanahati',
//         path: '/menusuasanahati',
//         component: MenusuasanahatiIndex
//     },
//     {
//         name: 'createMenusuasanahati',
//         path: '/menusuasanahati/create',
//         component: MenusuasanahatiCreate
//     },
//     {
//         name: 'editMenusuasanahati',
//         path: '/menusuasanahati/edit/:id',
//         component: MenusuasanahatiEdit
//     },
//     {
//         name: 'showMenusuasanahati',
//         path: '/menusuasanahati/show/:id',
//         component: MenusuasanahatiShow
//     },

//     //pesanan
//     {
//         name: 'homePesanan',
//         path: '/pesanan',
//         component: PesananIndex
//     },
//     {
//         name: 'createPesanan',
//         path: '/pesanan/create',
//         component: PesananCreate
//     },
//     {
//         name: 'editPesanan',
//         path: '/pesanan/edit/:id',
//         component: PesananEdit
//     },
//     {
//         name: 'showPesanan',
//         path: '/pesanan/show/:id',
//         component: PesananShow
//     },

//     //history pesanan 
//     {
//         name: 'homeHistorypesanan',
//         path: '/historypesanan',
//         component: HistorypesananIndex
//     },
//     {
//         name: 'createHistorypesanan',
//         path: '/historypesanan/create',
//         component: HistorypesananCreate
//     },
//     {
//         name: 'editHistorypesanan',
//         path: '/historypesanan/edit/:id',
//         component: HistorypesananEdit
//     },
//     {
//         name: 'showHistorypesanan',
//         path: '/historypesanan/show/:id',
//         component: HistorypesananShow
//     },


//     // datalatih
//     {
//         name: 'homeDatalatih',
//         path: '/datalatih',
//         component: DatalatihIndex
//     },
//     {
//         name: 'createDatalatih',
//         path: '/datalatih/create',
//         component: DatalatihCreate
//     },
//     {
//         name: 'editDatalatih',
//         path: '/datalatih/edit/:id',
//         component: DatalatihEdit
//     },
//     {
//         name: 'showDatalatih',
//         path: '/datalatih/show/:id',
//         component: DatalatihShow
//     }






// ];

// const router = new VueRouter({ mode: 'history', routes: routes });
// const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');