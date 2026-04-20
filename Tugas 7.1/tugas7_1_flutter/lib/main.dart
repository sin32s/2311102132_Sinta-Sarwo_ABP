import 'package:flutter/material.dart';
import 'dart:math'; // Diperlukan untuk fungsi pow()

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  // ==========================================
  // FUNGSI 1: Logika Array 2D
  // ==========================================
  String getArray2DText() {
    List<List<int>> array2D = [];

    // Baris 1: 4 bilangan kelipatan 6
    List<int> baris1 = [];
    for (int i = 1; i <= 4; i++) baris1.add(i * 6);
    array2D.add(baris1);

    // Baris 2: 5 bilangan ganjil
    List<int> baris2 = [];
    for (int i = 0; i < 5; i++) baris2.add(3 + (i * 2));
    array2D.add(baris2);

    // Baris 3: 6 bilangan pangkat tiga
    List<int> baris3 = [];
    for (int i = 0; i < 6; i++) {
      baris3.add(pow(i + 4, 3).toInt());
    }
    array2D.add(baris3);

    // Baris 4: 7 bilangan asli beda 7
    List<int> baris4 = [];
    for (int i = 0; i < 7; i++) baris4.add(3 + (i * 7));
    array2D.add(baris4);

    // Merangkai hasil ke dalam satu String
    String result = "Isi List:\n";
    for (var baris in array2D) {
      result += " ${baris.join(' ')}\n";
    }
    return result;
  }

  // ==========================================
  // FUNGSI 2: Logika FPB
  // ==========================================
  int hitungFPB(int a, int b) {
    while (b != 0) {
      int sisa = a % b;
      a = b;
      b = sisa;
    }
    return a;
  }

  String getFPBText(int bil1, int bil2) {
    int fpb = hitungFPB(bil1, bil2);
    return " Bilangan 1: $bil1\n Bilangan 2: $bil2\n FPB $bil1 dan $bil2 = $fpb";
  }

  // ==========================================
  // TAMPILAN UI FLUTTER
  // ==========================================
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Tugas Flutter Sinta',
      theme: ThemeData(
        colorScheme: ColorScheme.fromSeed(seedColor: Colors.blue),
        useMaterial3: true,
      ),
      home: Scaffold(
        appBar: AppBar(
          title: const Text('Tugas Mobile Programming', style: TextStyle(color: Colors.white)),
          backgroundColor: Colors.blueAccent,
        ),
        // SingleChildScrollView untuk layar bisa di-scroll jika kontennya panjang
        body: SingleChildScrollView(
          padding: const EdgeInsets.all(20.0),
          child: Column(
            crossAxisAlignment: CrossAxisAlignment.start, // Ratakan teks ke kiri
            children: [
              // --- Bagian Profil ---
              const Center(
                child: Column(
                  children: [
                    Icon(Icons.account_circle, size: 80, color: Colors.blueAccent),
                    SizedBox(height: 10),
                    Text(
                      'Sinta Sarwo',
                      style: TextStyle(fontSize: 24, fontWeight: FontWeight.bold),
                    ),
                    Text(
                      'NIM: 2311102132',
                      style: TextStyle(fontSize: 16, color: Colors.black54),
                    ),
                  ],
                ),
              ),
              
              const Divider(height: 40, thickness: 2), // Garis pembatas

              // --- Bagian Tugas 1 ---
              const Text(
                'Tugas 1: Array 2 Dimensi',
                style: TextStyle(fontSize: 18, fontWeight: FontWeight.bold),
              ),
              const SizedBox(height: 10),
              // Menampilkan hasil Array
              Text(
                getArray2DText(),
                style: const TextStyle(fontSize: 16, fontFamily: 'monospace'), 
              ),

              const Divider(height: 40, thickness: 2), // Garis pembatas

              // --- Bagian Tugas 2 ---
              const Text(
                'Tugas 2: Menghitung FPB',
                style: TextStyle(fontSize: 18, fontWeight: FontWeight.bold),
              ),
              const SizedBox(height: 10),
              // Menampilkan hasil FPB
              Text(
                getFPBText(12, 8),
                style: const TextStyle(fontSize: 16, fontFamily: 'monospace'),
              ),
            ],
          ),
        ),
      ),
    );
  }
}