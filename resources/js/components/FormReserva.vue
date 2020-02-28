<template>
  <div>



      <section class="elementor-element elementor-element-18f96993 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="18f96993" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
        <div class="elementor-element elementor-element-6c980a2a elementor-column elementor-col-100 elementor-top-column" data-id="6c980a2a" data-element_type="column">
        <div class="elementor-column-wrap  elementor-element-populated">
        <div class="elementor-widget-wrap">
				
            <section class="elementor-element elementor-element-78ee05dd elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="78ee05dd" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                <div class="elementor-element elementor-element-6c03508c elementor-column elementor-col-100 elementor-inner-column" data-id="6c03508c" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                <div class="elementor-widget-wrap">
                <div class="elementor-element elementor-element-6eb331c1 elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="6eb331c1" data-element_type="widget" data-widget_type="icon-list.default">
                <div class="elementor-widget-container">
				
                <!-- gif -->
                <div v-if="showGif" class="loadingio-spinner-eclipse-rubtoh2k00m" style="display:block; margin-left: auto; margin-right: auto; height: 183px">
                    <div class="ldio-9pi7jougjiv">
                        <div></div>
                    </div>
                </div>

                <!-- FORMULARIO -->
                <ul v-if="showForm" class="elementor-icon-list-items">
                    <li class="elementor-icon-list-item">
                            <input type="text" class="form-control" style="border-color:#ced4da" autocomplete="off" placeholder="Nome" value="" v-model="nome">
                        </li>
                    <li class="elementor-icon-list-item">
                            <input type="email" class="form-control" style="margin-top: 5px; border-color:#ced4da" autocomplete="off" placeholder="E-mail" value="" v-model="email">
                        </li>
                    <li class="elementor-icon-list-item">
                            <input type="number" class="form-control" style="margin-top: 5px; border-color:#ced4da" autocomplete="off" placeholder="Celular" value="" v-model="cel">
                    </li>
                    <li class="elementor-icon-list-item">
                            <input type="number" class="form-control" style="margin-top: 5px; border-color:#ced4da" autocomplete="off" placeholder="Telefone (opcional) " value="" v-model="tel">
                    </li>	
                </ul>

                <!-- Mensagem de sucesso -->
                <div v-if="showMsgSucesso" style="display:block; height: 130px; margin: 15% auto 0px 10%;">
                    <ul v-if="true" class="elementor-icon-list-items">
                    <li class="elementor-icon-list-item" >
                        <h6 style="color:green; letter-spacing: 1px; box-shadow: 2px 2px 5px #999; padding: 4px 7px">Reserva efetuada com sucesso !</h6>
                    </li>
                    	
                </ul>

                </div>
                


				</div>
				</div>
				</div>
			    </div>
                </div>
                </div>
                </div>
					</section>
				</div>
				</div>
				</div>
				</div>
				</div>
			</section>
			<section class="elementor-element elementor-element-5dd58053 elementor-section-height-full elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="5dd58053" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-3fe80b3d elementor-column elementor-col-100 elementor-top-column" data-id="3fe80b3d" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-column-wrap  elementor-element-populated">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-widget-wrap">
                <div class="elementor-element elementor-element-32f09ab4 elementor-align-center elementor-widget elementor-widget-button" data-id="32f09ab4" data-element_type="widget" data-widget_type="button.default">
                <div class="elementor-widget-container">
                <div class="elementor-button-wrapper">
                <a v-bind:style="styleButton" href="#" v-on:click.stop.prevent="cadastrarReserva()" class="elementor-button-link elementor-button elementor-size-lg" role="button">
                    <span class="elementor-button-content-wrapper">
            
                    <span class="elementor-button-text">{{textButton}}</span>

                    </span>

                    
                </a>
                <br><p class="text-danger" style="color: red; margin-top: 8px">{{textDanger}}</p>
                


                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
				</div>
			    </div>
		    </section>
           
           

  </div>
</template>

<script>

import VueResource from 'vue-resource';

export default {
    
    data : function() {
        return {
            nome : '',
            email : '',
            cel : '',
            tel: '',
            showGif : false,
            showForm : true,
            showMsgSucesso : false,
            styleButton : '',
            stylebuttonGray : 'color:write; background-color: #a5a0a0; border-color: gray',
            stylebuttonBlue : 'color:write; background-color: #67bee0; border-color: #3592b7',
            textButton : 'Enviar',
            textDanger : ''
        }
    },
    methods : {
        cadastrarReserva : function () {
            
            if(this.nome == ''){
                this.textDanger = '* Favor inserir o nome.';
                return;
            }else if(this.email == '' && this.cel == '' && this.tel == ''){
                this.textDanger = '* Favor inserir ao menos uma forma de contato.';
                return;
            }

            if(!this.showGif && this.textButton == 'Enviar'){
                this.showForm = false;
                this.showGif = true;
                //this.styleButton = this.stylebuttonGray;
                this.efetivarReserva();
            }

            if(this.textButton == 'Nova reserva'){
                this.showGif = false;
                this.showMsgSucesso = false;
                this.showForm = true;
                this.textButton = 'Enviar';
                this.styleButton = '';

                this.nome = '';
                this.email = '';
                this.cel = '';
                this.tel = ''

            }
            
        },
        validarDadosReserva : function () {

        },
        efetivarReserva : function () {
            this.textButton = 'Enviando...';
            this.textDanger = '';
            
            var url = 'api/reserva/escritorio'; // preencher o controller
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            
            this.$http.post(url,{
                nome : this.nome,
                email : this.email,
                cel : this.cel,
                tel : this.tel
            })
            .then(function(response){
                var body = response;//.body;//JSON.parse(response.body);//
                //this.xxxx = body.xxxx;
                console.log('retorno');
                console.log(body);
                this.textButton = 'Nova reserva';
                //this.styleButton = this.stylebuttonBlue;
                this.styleButton = '';
                this.showGif = false;
                this.showMsgSucesso = true;
                this.showForm = false;
                

            
                
            }, function(error){
                console.log(error);
            })
            // finally é executado sempre, um bom artificio para mostrar que a pagina esta carregando
            .finally(function(){
            });
        }
    },
    mounted() {
                console.log('Component mounted.');
                
    }
}
</script>

<style>

/* spinner que peguei na web */
@keyframes ldio-9pi7jougjiv {
  0% { transform: rotate(0deg) }
  50% { transform: rotate(180deg) }
  100% { transform: rotate(360deg) }
}
.ldio-9pi7jougjiv div {
  position: absolute;
  animation: ldio-9pi7jougjiv 1s linear infinite;
  width: 98.80000000000001px;
  height: 98.80000000000001px;
  top: 74.10000000000001px;
  left: 74.10000000000001px;
  border-radius: 50%;
  box-shadow: 0 1.235px 0 0 #262323;
  transform-origin: 49.400000000000006px 50.017500000000005px;
}
.loadingio-spinner-eclipse-rubtoh2k00m {
  width: 247px;
  height: 247px;
  display: inline-block;
  overflow: hidden;
  background: none;
}
.ldio-9pi7jougjiv {
  width: 100%;
  height: 100%;
  position: relative;
  transform: translateZ(0) scale(1);
  backface-visibility: hidden;
  transform-origin: 0 0; /* see note above */
}
.ldio-9pi7jougjiv div { box-sizing: content-box; }
/* generated by https://loading.io/ */

</style>