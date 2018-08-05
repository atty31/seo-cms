<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        {{ trans('adminlte_lang::message.date') }} <?php echo date("Y-m-d"); ?>
    </div>
    <!-- Default to the left -->
    <strong><a target="_blank" href ="http://www.gnu.org/licenses/" >Copyright</a> &copy; 2016- <?php echo date('Y'); ?>  <a target="_blank" href="{{ url('/') }}">SEO-CMS</a>.</strong> {{ trans('adminlte_lang::message.seecode') }} <a target="_blank" href="https://gitlab.com/calinciupei/seo-cms">Gitlab</a>
</footer>

<div class="modal fade" id="main-modal" tabindex="-1" role="dialog" aria-labelledby="mainModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel"></h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>