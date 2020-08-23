@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Conversas</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

     <!-- Main content -->
     <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="talkjs-container" style="width: 100%; height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        function chatStart (fromId) {
            Talk.ready.then(async function() {
                var userMe = await $.get( "/api/user/{{\Auth::user()->id}}");
                var userOther = await $.get( "/api/user/"+fromId);

                var me = new Talk.User(userMe);

                window.talkSession = new Talk.Session({
                    appId: "tacUGqLe",
                    me: me,
                });

                var other = new Talk.User(userOther);

                var conversation = talkSession.getOrCreateConversation(Talk.oneOnOneId(me, other))
                conversation.setParticipant(me);
                conversation.setParticipant(other);

                var inbox = talkSession.createInbox({selected: conversation});
                inbox.mount($("#talkjs-container"));
            });
        }

        $(window).on('load', function (){
            var userId = 1;
            chatStart(userId);
        });
    </script>
@endsection
