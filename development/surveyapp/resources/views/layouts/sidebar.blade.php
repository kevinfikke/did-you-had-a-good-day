<div class="sidenav">
        <a href="{{ route('opinions') }}">Opinions</a>
        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                    Votes <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a href="{{route('totalchart')}}">Total</a>
                    </li>
                    <li>
                        <a href="{{route('dailychart')}}">Today</a>
                    </li>
                    <li>
                        <a href="{{route('weeklychart')}}">Weekly</a>
                    </li>
                    <li>
                        <a href="{{route('monthlychart')}}">Monthly</a>
                    </li>
                </ul>
            </li>
</div>