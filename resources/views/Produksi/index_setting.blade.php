@php
    $cFL=[0,0]; //Count panel FL and cell
    $cFM=[0,0]; //Count panel FM and cell
    $cWL=[0,0]; //Count panel WL and cell
    $cWM=[0,0]; //Count panel WM and cell
    $ccFL=[0,0]; //Count cell panel FL and cell
    $ccFM=[0,0]; //Count cell panel FM and cell
    $ccWL=[0,0]; //Count cell panel WL and cell
    $ccWM=[0,0]; //Count cell panel WM and cell
@endphp
@foreach ($panel as $panel)
    @if(($panel->panel_FW=="F") &&($panel->panel_LM=="L")  )
    {{-- //  Count Progress --}}
        @if($panel->panel_status_pekerjaan != "Selesai")
        @php
            $cFL[1] += 1;
            $ccFL[1] += $panel->panel_cell;
        @endphp
        @endif
    {{-- //  Count Total --}}
        @php
            $cFL[0]+=1;
            $ccFL[0]+=$panel->panel_cell;
        @endphp
    @elseif (($panel->panel_FW =="F") &&($panel->panel_LM =="M"))
        {{-- //  Count Progress --}}
        @if($panel->panel_status_pekerjaan !="Selesai")
        @php
            $cFM[1]+=1;
            $ccFM[1]+=$panel->panel_cell;
        @endphp
        @endif
        {{-- //  Count Total --}}
        @php
            $cFM[0]+=1;
            $ccFM[0]+=$panel->panel_cell;
        @endphp
    @elseif (($panel->panel_FW =="W") &&($panel->panel_LM =="L"))
        @if($panel->panel_status_pekerjaan !="Selesai"){
            @php
                $cWL[1]+=1;
                $ccWL[1]+=$panel->panel_cell;
            @endphp
        @endif
        {{-- //  Count Total --}}
        @php
            $cWL[0]+=1;
            $ccWL[0]+=$panel->panel_cell;
        @endphp
    @elseif (($panel->panel_FW =="W") &&($panel->panel_LM =="M"))
        @if($panel->panel_status_pekerjaan !="Selesai")
            @php
                $cWM[1]+=1;
                $ccWM[1]+=$panel->panel_cell;
            @endphp
        @endif
        {{-- //  Count Total --}}
        @php
            $cWM[0]+=1;
            $ccWM[0]+=$panel->panel_cell;
        @endphp
    @endif
@endforeach
