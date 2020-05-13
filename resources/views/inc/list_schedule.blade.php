
<div class="schedule_list"><ul>
        @if($type === 'Список кафедр')
            @foreach($data as $item)
                <li><a href="{{ route('CafedraInfoID', $item->id) }}"> {{$item->name}} </a></li>
            @endforeach
        @endif
        @if($type === 'Список викладачів')
                @foreach($data as $item)
                    <li><a href="{{ route('LectureInfoID', $item->id) }}"> {{$item->name}} </a></li>
                @endforeach
            @endif
            @if($type === 'Список предметів')
                @foreach($data as $item)
                    <li><a href="{{ route('SubjectInfoID', $item->id) }}"> {{$item->name}} </a></li>
                @endforeach
            @endif
            @if($type === 'Список груп')
                @foreach($data as $item)
                    <li><a href="{{ route('GroupInfoID', $item->id) }}"> {{$item->name}} </a></li>
                @endforeach
            @endif
    </ul>
</div>




