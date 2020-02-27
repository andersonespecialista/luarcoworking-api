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
				
                <!-- FORMULARIO -->
                <ul class="elementor-icon-list-items">
                    <li class="elementor-icon-list-item">
                            <input type="text" class="form-control" style="border-color:gray" autocomplete="off" placeholder="Nome" value="" v-model="nome">
                        </li>
                    <li class="elementor-icon-list-item">
                            <input type="email" class="form-control" style="margin-top: 5px; border-color:gray" autocomplete="off" placeholder="E-mail" value="" v-model="email">
                        </li>
                    <li class="elementor-icon-list-item">
                            <input type="number" class="form-control" style="margin-top: 5px; border-color:gray" autocomplete="off" placeholder="Celular" value="" v-model="cel">
                    </li>
                    <li class="elementor-icon-list-item">
                            <input type="number" class="form-control" style="margin-top: 5px; border-color:gray" autocomplete="off" placeholder="Telefone (opcional) " value="" v-model="tel">
                    </li>	
                </ul>	
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
                <a href="#" v-on:click.stop.prevent="cadastrarReserva()" class="elementor-button-link elementor-button elementor-size-lg" role="button">
                    <span class="elementor-button-content-wrapper">
                    <span class="elementor-button-text">Confirmar </span>
                    </span>
                </a>
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
            tel: ''
        }
    },
    methods : {
        cadastrarReserva : function () {
            this.efetivarReserva();
        },
        validarDadosReserva : function () {

        },
        efetivarReserva : function () {
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

</style>