@props(['dataBox'=>[]])
<!-- <div class="col-lg-3 col-6">
    <div class="small-box ">
        <div class="inner">
            <h3>h3>
            <p></p>
        </div>
        <div class="icon">
            <i class=""></i>
        </div>
        <a href="{{ $dataBox['href'] }}" class="small-box-footer">
            More info
            <i class="fas fa-arrow-circle-right"></i>
        </a>
    </div>
</div> -->

<div class="col-md-3 col-sm-6 col-12">
            <div class="info-box {{ $dataBox['background'] }}">
              <span class="info-box-icon"><i class="{{ $dataBox['icon'] }}"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">{{ $dataBox['label'] }}</span>
                <span class="info-box-number">{{ $dataBox['value'] }}</span>

                <a href="{{ $dataBox['href'] }}" style="color: white">
                    <i class="fas fa-arrow-circle-right small-box-footer"></i>  More info
                </a>
            </div>
            <!-- /.info-box-content -->
        </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->