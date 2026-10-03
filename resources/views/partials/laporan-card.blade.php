<div style="background-color: #f7faff; border: 1.5px solid #90caf9; padding: 16px; border-radius: 10px; margin-bottom: 14px;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
        <strong style="color: #0d47a1;">{{ $item['nama'] }}</strong>
        
        {{-- Logika Penentuan Status --}}
        @if($item['tinggi'] < 30)
            <span class="status-badge waspada">Waspada</span>
        @elseif($item['tinggi'] >= 30 && $item['tinggi'] <= 70)
            <span class="status-badge siaga">Siaga</span>
        @else
            <span class="status-badge awas">Awas</span>
        @endif
    </div>

    <div style="font-size: 0.9rem; color: #444;">
        <p style="margin-bottom: 4px;"><strong>Lokasi:</strong> {{ $item['lokasi'] }}</p>
        <p><strong>Tinggi Genangan:</strong> {{ $item['tinggi'] }} cm</p>
    </div>
</div>