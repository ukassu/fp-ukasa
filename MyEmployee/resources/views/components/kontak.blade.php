<div style="position: absolute; margin: 12rem 0rem 10rem 48rem; width: 40%; box-shadow: 2px 2px 8px gray;" class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('profil.update') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label"> Email Perusahaan</label>
                <input type="text" value="{{ old('email', $users->email) }}" class="form-control" name="email" id="email" disabled>
            </div>
            <div class="mb-3">
                <label for="email_pribadi" class="form-label"> Email Pribadi</label>
                <input type="text" value="{{ old('email_pribadi', $pegawai->email_pribadi) }}" class="form-control" name="email_pribadi" id="email_pribadi">
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No. Telepon</label>
                <input type="text" value="{{ old('no_telp', $pegawai->no_telp) }}" class="form-control" name="no_telp" id="no_telp">
            </div>
            <div class="button-position">
                <button type="submit" class="section-button">Update</button>
            </div>
        </form>
        
    </div>
</div>