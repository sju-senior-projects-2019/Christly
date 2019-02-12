package com.example.janiece.christly;

import android.icu.text.IDNA;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class loginpage extends AppCompatActivity {

    private EditText Name;
    private EditText Password;
    private TextView Info;
    private Button Login;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.login);


        Name = (EditText)findViewById(R.id.etName);
        Password = (EditText)findViewById(R.id.etPassword);
        Info = (TextView)findViewById(R.id.Tvinfo);
        Login = (Button)findViewById(R.id.btnLogin);

    }

    private void OnLogin (View view){
        String username = Name.getText().toString();
        String password = Password.getText().toString();
        String type = "login";

        BackgroundWorker BackgroundWorker = new BackgroundWorker(this);
        ((BackgroundWorker) BackgroundWorker).execute(type, username, password)
    }
}