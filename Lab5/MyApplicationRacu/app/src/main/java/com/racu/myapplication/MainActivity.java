package com.racu.myapplication;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.webkit.WebView;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {

    private WebView webView;
    private Button button;
    private EditText editText;
    private String search;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        webView = (WebView) findViewById(R.id.web_view_id);
        button = (Button) findViewById(R.id.button_id);
        editText = (EditText) findViewById(R.id.edit_text_id);

        webView.getSettings().setJavaScriptEnabled(true);

        AnimationUtil.animate().scaleView(webView, 0f);
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if (!editText.getText().toString().matches("")) {
                    search = editText.getText().toString();
                    webView.loadUrl("https://www.google.com/search?q=" + search + "&safe=active&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjQhZ73pIXNAhWF0xQKHSmYB3oQ_AUIBygB&biw=1366&bih=654");
                    AnimationUtil.animate().scaleView(webView, 1f);
                }
            }
        });

    }
}
