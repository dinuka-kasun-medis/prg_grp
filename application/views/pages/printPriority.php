<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/printpriority.css')?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/js/printpriority.js')?>">
<body>
<section>
<br/>
<br/>
<br/>
<section>
<section>
<div id="chartpanel" class="row" data-equalizer>
  
  <div class="column small-12 left_panel" >
    <header data-equalizer-watch>
      <i class="fa fa-bars menu_top_icon" aria-hidden="true"></i>
      <div class="right_nav">
        <i class="fa fa-heart" aria-hidden="true"></i>
        <i class="fa fa-link" aria-hidden="true"></i>
        <i class="fa fa-user-circle" aria-hidden="true"></i>
      </div>
      <charttitle> </charttitle>
    </header>
  
  
  <div id="chart_table">
    <form id="chart_datas"  >
      <div class="grid-container">
        <div class="grid-x grid-padding-x input_wrp">
          <div class="small-1 cell column">
            <label>
              <input type="text" placeholder="id">
            </label>
          </div>
          <div class="small-2 cell column">
            <label>
              <input type="text" placeholder="value" v-model="value" id="value" name="value">
            </label>
          </div>
          <div class="small-6 cell column">
            <label>
              <input type="text" placeholder="Label" v-model="label" id="label" name="label">
            </label>
          </div>
          <div class="small-3 cell column">
            <label>
              <input type="text" placeholder="Icon" v-model="icon" id="icon" name="icon">
            </label>
          </div>
        </div>
        
         <div class="addRowBtn" v-on:click.prevent="addRow" value=""><i class="fa fa-plus" aria-hidden="true"></i></div>
      </div>  

    </form>
    
    <charttable v-bind:proplabels="labels"> </charttable>
  </div>
  </div> <!-- end left panel -->
  <!--<div class="column small-12 medium-4 right_panel">
    <header data-equalizer-watch>
<chartsubtitle> </chartsubtitle>
    </header>
  </div> -->
</div>
</section>
</body>

