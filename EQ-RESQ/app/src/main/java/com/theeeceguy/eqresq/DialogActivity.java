package com.theeeceguy.eqresq;

import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.support.multidex.MultiDex;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;

public class DialogActivity extends AppCompatActivity {

    String smsBody = "";

    String lowRangeText = "An Earthquake has occured!\n"+
            "Please don't panic.";
    String midRangeText = "An Earthquake has occured!\n" +
            "go to open space\n" +
            "if possible otherwise take cover \n" +
            "bulding won't breakdown so don't panic";
    String highRangeText = "An Earthquake has occured!\n" +
            "put on the safety band\n" +
            "take cover under something strong";

    String warningMessage = "";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        try {
            smsBody = "" + getIntent().getExtras().get("smsbody").toString();
        } catch (Exception e) {
            //Toast.makeText(getBaseContext(), e.getMessage(), Toast.LENGTH_LONG).show();
            Log.d("Exception caught", e.getMessage());
        }


        if(smsBody.contains("5")) {
            warningMessage = "" +lowRangeText;
        }
        else if(smsBody.contains("6")) {
            warningMessage = "" +midRangeText;
        }
        else if(smsBody.contains("7")) {
            warningMessage = "" +highRangeText;
        }


        AlertDialog.Builder alertDialogBuilder = new AlertDialog.Builder(this);

        alertDialogBuilder.setTitle("Earthquake Alert!");
        alertDialogBuilder.setMessage(warningMessage);
        alertDialogBuilder.setPositiveButton("SAVE ME!", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialogInterface, int i) {
                Intent intent = new Intent(DialogActivity.this, DeviceListActivity.class);
                startActivity(intent);
            }
        });
        alertDialogBuilder.setNegativeButton("Cancel", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialogInterface, int i) {
                dialogInterface.dismiss();
            }
        });
        AlertDialog alertDialog = alertDialogBuilder.create();
        alertDialog.show();
    }


    @Override
    public void attachBaseContext(Context base) {
        MultiDex.install(base);
        super.attachBaseContext(base);
    }


}
