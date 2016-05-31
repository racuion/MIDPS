package com.domain.company.racuapplication;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    public TextView text;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void touch(View view){
        text = (TextView) findViewById(R.id.text);
        assert text != null;
        text.setText("TExt: "+"Hello World!!");
    }
    public void close(View view){
        finish();
    }
}
