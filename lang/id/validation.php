<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Baris Bahasa Validasi
    |--------------------------------------------------------------------------
    |
    | Pesan error bawaan yang dipakai oleh class validator. Beberapa aturan,
    | seperti aturan ukuran, punya beberapa versi (angka, teks, file, array).
    |
    */

    'accepted' => 'Isian :attribute harus disetujui.',
    'accepted_if' => 'Isian :attribute harus disetujui jika :other bernilai :value.',
    'active_url' => 'Isian :attribute harus berupa URL yang valid.',
    'after' => 'Isian :attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => 'Isian :attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => 'Isian :attribute hanya boleh berisi huruf.',
    'alpha_dash' => 'Isian :attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => 'Isian :attribute hanya boleh berisi huruf dan angka.',
    'any_of' => 'Isian :attribute tidak valid.',
    'array' => 'Isian :attribute harus berupa array.',
    'array_keys' => 'Isian :attribute hanya boleh berisi kunci berikut: :values.',
    'ascii' => 'Isian :attribute hanya boleh berisi karakter alfanumerik dan simbol single-byte.',
    'base64' => 'Isian :attribute harus berupa teks Base64 yang valid.',
    'before' => 'Isian :attribute harus berupa tanggal sebelum :date.',
    'before_or_equal' => 'Isian :attribute harus berupa tanggal sebelum atau sama dengan :date.',
    'between' => [
        'array' => 'Isian :attribute harus berisi antara :min sampai :max item.',
        'file' => 'Ukuran :attribute harus antara :min sampai :max kilobita.',
        'numeric' => 'Isian :attribute harus bernilai antara :min sampai :max.',
        'string' => 'Isian :attribute harus terdiri dari :min sampai :max karakter.',
    ],
    'boolean' => 'Isian :attribute harus bernilai benar atau salah.',
    'can' => 'Isian :attribute berisi nilai yang tidak diizinkan.',
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',
    'contains' => 'Isian :attribute tidak memuat nilai yang diwajibkan.',
    'current_password' => 'Kata sandi salah.',
    'date' => 'Isian :attribute harus berupa tanggal yang valid.',
    'date_equals' => 'Isian :attribute harus berupa tanggal yang sama dengan :date.',
    'date_format' => 'Isian :attribute harus sesuai format :format.',
    'decimal' => 'Isian :attribute harus memiliki :decimal angka desimal.',
    'declined' => 'Isian :attribute harus ditolak.',
    'declined_if' => 'Isian :attribute harus ditolak jika :other bernilai :value.',
    'different' => 'Isian :attribute dan :other harus berbeda.',
    'digits' => 'Isian :attribute harus terdiri dari :digits digit.',
    'digits_between' => 'Isian :attribute harus terdiri dari :min sampai :max digit.',
    'dimensions' => 'Dimensi gambar :attribute tidak valid.',
    'distinct' => 'Isian :attribute memiliki nilai yang duplikat.',
    'doesnt_contain' => 'Isian :attribute tidak boleh memuat salah satu dari: :values.',
    'doesnt_end_with' => 'Isian :attribute tidak boleh diakhiri salah satu dari: :values.',
    'doesnt_start_with' => 'Isian :attribute tidak boleh diawali salah satu dari: :values.',
    'email' => 'Isian :attribute harus berupa alamat email yang valid.',
    'encoding' => 'Isian :attribute harus menggunakan encoding :encoding.',
    'ends_with' => 'Isian :attribute harus diakhiri salah satu dari: :values.',
    'enum' => ':attribute yang dipilih tidak valid.',
    'exists' => ':attribute yang dipilih tidak valid.',
    'extensions' => 'Isian :attribute harus memiliki salah satu ekstensi berikut: :values.',
    'file' => 'Isian :attribute harus berupa file.',
    'filled' => 'Isian :attribute harus memiliki nilai.',
    'gt' => [
        'array' => 'Isian :attribute harus berisi lebih dari :value item.',
        'file' => 'Ukuran :attribute harus lebih besar dari :value kilobita.',
        'numeric' => 'Isian :attribute harus lebih besar dari :value.',
        'string' => 'Isian :attribute harus lebih dari :value karakter.',
    ],
    'gte' => [
        'array' => 'Isian :attribute harus berisi :value item atau lebih.',
        'file' => 'Ukuran :attribute harus lebih besar dari atau sama dengan :value kilobita.',
        'numeric' => 'Isian :attribute harus lebih besar dari atau sama dengan :value.',
        'string' => 'Isian :attribute harus terdiri dari :value karakter atau lebih.',
    ],
    'hex_color' => 'Isian :attribute harus berupa warna heksadesimal yang valid.',
    'image' => 'Isian :attribute harus berupa gambar.',
    'in' => ':attribute yang dipilih tidak valid.',
    'in_array' => 'Isian :attribute harus ada di :other.',
    'in_array_keys' => 'Isian :attribute harus memuat setidaknya salah satu kunci berikut: :values.',
    'integer' => 'Isian :attribute harus berupa bilangan bulat.',
    'ip' => 'Isian :attribute harus berupa alamat IP yang valid.',
    'ipv4' => 'Isian :attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => 'Isian :attribute harus berupa alamat IPv6 yang valid.',
    'json' => 'Isian :attribute harus berupa teks JSON yang valid.',
    'list' => 'Isian :attribute harus berupa list.',
    'lowercase' => 'Isian :attribute harus berupa huruf kecil.',
    'lt' => [
        'array' => 'Isian :attribute harus berisi kurang dari :value item.',
        'file' => 'Ukuran :attribute harus kurang dari :value kilobita.',
        'numeric' => 'Isian :attribute harus kurang dari :value.',
        'string' => 'Isian :attribute harus kurang dari :value karakter.',
    ],
    'lte' => [
        'array' => 'Isian :attribute tidak boleh berisi lebih dari :value item.',
        'file' => 'Ukuran :attribute harus kurang dari atau sama dengan :value kilobita.',
        'numeric' => 'Isian :attribute harus kurang dari atau sama dengan :value.',
        'string' => 'Isian :attribute tidak boleh lebih dari :value karakter.',
    ],
    'mac_address' => 'Isian :attribute harus berupa alamat MAC yang valid.',
    'max' => [
        'array' => 'Isian :attribute tidak boleh berisi lebih dari :max item.',
        'file' => 'Ukuran :attribute tidak boleh lebih dari :max kilobita.',
        'numeric' => 'Isian :attribute tidak boleh lebih dari :max.',
        'string' => 'Isian :attribute tidak boleh lebih dari :max karakter.',
    ],
    'max_digits' => 'Isian :attribute tidak boleh lebih dari :max digit.',
    'mimes' => 'Isian :attribute harus berupa file bertipe: :values.',
    'mimetypes' => 'Isian :attribute harus berupa file bertipe: :values.',
    'min' => [
        'array' => 'Isian :attribute harus berisi minimal :min item.',
        'file' => 'Ukuran :attribute minimal :min kilobita.',
        'numeric' => 'Isian :attribute minimal bernilai :min.',
        'string' => 'Isian :attribute minimal terdiri dari :min karakter.',
    ],
    'min_digits' => 'Isian :attribute minimal terdiri dari :min digit.',
    'missing' => 'Isian :attribute harus tidak ada.',
    'missing_if' => 'Isian :attribute harus tidak ada jika :other bernilai :value.',
    'missing_unless' => 'Isian :attribute harus tidak ada kecuali :other bernilai :value.',
    'missing_with' => 'Isian :attribute harus tidak ada jika :values diisi.',
    'missing_with_all' => 'Isian :attribute harus tidak ada jika :values semuanya diisi.',
    'multiple_of' => 'Isian :attribute harus kelipatan dari :value.',
    'not_in' => ':attribute yang dipilih tidak valid.',
    'not_regex' => 'Format :attribute tidak valid.',
    'numeric' => 'Isian :attribute harus berupa angka.',
    'password' => [
        'letters' => 'Isian :attribute harus memuat setidaknya satu huruf.',
        'mixed' => 'Isian :attribute harus memuat setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers' => 'Isian :attribute harus memuat setidaknya satu angka.',
        'symbols' => 'Isian :attribute harus memuat setidaknya satu simbol.',
        'uncompromised' => ':attribute ini pernah muncul dalam kebocoran data. Silakan pilih :attribute yang lain.',
    ],
    'present' => 'Isian :attribute harus ada.',
    'present_if' => 'Isian :attribute harus ada jika :other bernilai :value.',
    'present_unless' => 'Isian :attribute harus ada kecuali :other bernilai :value.',
    'present_with' => 'Isian :attribute harus ada jika :values diisi.',
    'present_with_all' => 'Isian :attribute harus ada jika :values semuanya diisi.',
    'prohibited' => 'Isian :attribute tidak diizinkan.',
    'prohibited_if' => 'Isian :attribute tidak diizinkan jika :other bernilai :value.',
    'prohibited_if_accepted' => 'Isian :attribute tidak diizinkan jika :other disetujui.',
    'prohibited_if_declined' => 'Isian :attribute tidak diizinkan jika :other ditolak.',
    'prohibited_unless' => 'Isian :attribute tidak diizinkan kecuali :other ada di :values.',
    'prohibits' => 'Isian :attribute melarang :other untuk diisi.',
    'regex' => 'Format :attribute tidak valid.',
    'required' => 'Isian :attribute wajib diisi.',
    'required_array_keys' => 'Isian :attribute harus memuat entri untuk: :values.',
    'required_if' => 'Isian :attribute wajib diisi jika :other bernilai :value.',
    'required_if_accepted' => 'Isian :attribute wajib diisi jika :other disetujui.',
    'required_if_declined' => 'Isian :attribute wajib diisi jika :other ditolak.',
    'required_unless' => 'Isian :attribute wajib diisi kecuali :other ada di :values.',
    'required_with' => 'Isian :attribute wajib diisi jika :values diisi.',
    'required_with_all' => 'Isian :attribute wajib diisi jika :values semuanya diisi.',
    'required_without' => 'Isian :attribute wajib diisi jika :values tidak diisi.',
    'required_without_all' => 'Isian :attribute wajib diisi jika :values semuanya tidak diisi.',
    'same' => 'Isian :attribute harus sama dengan :other.',
    'size' => [
        'array' => 'Isian :attribute harus berisi :size item.',
        'file' => 'Ukuran :attribute harus :size kilobita.',
        'numeric' => 'Isian :attribute harus bernilai :size.',
        'string' => 'Isian :attribute harus terdiri dari :size karakter.',
    ],
    'starts_with' => 'Isian :attribute harus diawali salah satu dari: :values.',
    'string' => 'Isian :attribute harus berupa teks.',
    'timezone' => 'Isian :attribute harus berupa zona waktu yang valid.',
    'unique' => ':attribute sudah digunakan.',
    'uploaded' => ':attribute gagal diunggah.',
    'uppercase' => 'Isian :attribute harus berupa huruf besar.',
    'url' => 'Isian :attribute harus berupa URL yang valid.',
    'ulid' => 'Isian :attribute harus berupa ULID yang valid.',
    'uuid' => 'Isian :attribute harus berupa UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Pesan Validasi Khusus
    |--------------------------------------------------------------------------
    |
    | Pesan khusus untuk kombinasi "atribut.aturan" tertentu.
    |
    */

    'custom' => [
        'tahun_terbit' => [
            'max' => 'Tahun terbit tidak boleh melebihi tahun sekarang (:max).',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Nama Atribut
    |--------------------------------------------------------------------------
    |
    | Mengganti nama kolom di pesan error menjadi lebih mudah dibaca,
    | misalnya "tahun_terbit" menjadi "tahun terbit".
    |
    */

    'attributes' => [
        'judul' => 'judul',
        'penulis' => 'penulis',
        'penerbit' => 'penerbit',
        'tahun_terbit' => 'tahun terbit',
        'sinopsis' => 'sinopsis',
        'name' => 'nama',
        'password' => 'kata sandi',
    ],

];
