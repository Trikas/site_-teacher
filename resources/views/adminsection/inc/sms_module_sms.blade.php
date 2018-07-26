<div class="direct-chat-messages">
             <!-- Message. Default to the left -->
            @foreach($all_message as $all_msg)   
            @if($all_msg->user_send==$user)        
            <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-name float-right">{{$user}}</span>
                      <span class="direct-chat-timestamp float-left">{{$all_msg->date_send}}</span>
                    </div>
                    <img class="direct-chat-img" src="{{asset('assets/dist/img/user3-128x128.jpg')}}" alt="message user image">
                    <div class="direct-chat-text">
                      {{$all_msg->content}}
                    </div>
                  </div>
            @else
            <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-name float-left">{{$all_msg->user_send}}</span>
                      <span class="direct-chat-timestamp float-right">{{$all_msg->date_send}}</span>
                    </div>
                    <img class="direct-chat-img" src="{{asset('assets/dist/img/user3-128x128.jpg')}}" alt="message user image">
                    <div class="direct-chat-text">
                        {{$all_msg->content}}
                    </div>
                  </div>
            @endif           
            @endforeach <!--/.direct-chat-messages-->
</div> <!-- /.direct-chat-pane -->