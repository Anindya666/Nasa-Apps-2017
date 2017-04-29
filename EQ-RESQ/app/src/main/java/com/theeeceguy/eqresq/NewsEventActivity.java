package com.theeeceguy.eqresq;

import android.content.Context;
import android.content.Intent;
import android.os.StrictMode;
import android.support.design.widget.NavigationView;
import android.support.multidex.MultiDex;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

public class NewsEventActivity extends AppCompatActivity implements NavigationView.OnNavigationItemSelectedListener {

    String newsHeaderOne = "7.8 Quake hits New Zealand after Midnight";

    String newsHeaderTwo = "Norcia collapses in the 6.6 Quake in Italy";

    String newsHeaderThree = "Gorkha earthquake shakes Nepal";

    String newsOne = "The magnitude-7.8 quake struck just after midnight Sunday and was centered 57 miles northeast of Christchurch, according to the U.S. Geological Survey. It was at a relatively shallow depth of 6 miles. Although Monday’s quake was stronger than the deadly 2011 tremor, its epicenter was much farther from any major urban areas. " +
            "Earthquakes tend to be more strongly felt on the surface when they’re shallow. " +
            "The quake completely cut off road access to Kaikoura, said resident Terry Thompson, who added that electricity and most phones were also down in the town of 2,000, a popular destination for tourists taking part in whale-watching expeditions.";

    String newsTwo = "Fire and rescue services said six people had been pulled from rubble in Norcia. "
            +" There were no immediate reports of deaths -- many residents had not returned since a devastating quake in August. "
            +" There have been about 200 aftershocks since Sunday's quake in the border area between the Marche and Umbria regions, according to National Institute for Geophysics and Vulcanology. "
            +" Some villages are cut off, so the impact there has not been assessed, said Fabrizio Curcio, the civil protection chief. "
            +" Some 15,000 people are without electricity, according to Curcio. "
            +" Much of the Basilica of San Benedetto in Norcia collapsed.";

    String newsThree = "Nepal earthquake of 2015, also called Gorkha earthquake, severe earthquake that struck near the city of Kathmandu in central Nepal on April 25, 2015. " +
            "About 9,000 people were killed, many thousands more were injured, and more than 600,000 structures in Kathmandu and other nearby towns were either damaged or destroyed. " +
            "The earthquake was felt throughout central and eastern Nepal, much of the Ganges River plain in northern India, and northwestern Bangladesh, as well as in the southern parts of the Plateau of Tibet and western Bhutan.";

    TextView news_heading, news_description;

    String newsNumber;

    Button donate_button;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_news_event);

        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbarNewsEvent);
        setSupportActionBar(toolbar);

        newsNumber = getIntent().getExtras().get("event").toString();

        news_heading = (TextView) findViewById(R.id.newsHeading);

        news_description = (TextView) findViewById(R.id.newsDescription);

        checkEvent(newsNumber);

        donate_button = (Button) findViewById(R.id.donate_btn);

        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        ActionBarDrawerToggle toggle = new ActionBarDrawerToggle(
                this, drawer, toolbar, R.string.navigation_drawer_open, R.string.navigation_drawer_close);
        drawer.setDrawerListener(toggle);
        toggle.syncState();

        NavigationView navigationView = (NavigationView) findViewById(R.id.nav_view);
        navigationView.setNavigationItemSelectedListener(this);

        donate_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(NewsEventActivity.this, DonationActivity.class);
                startActivity(i);
                overridePendingTransition(R.anim.slide_in_right, R.anim.slide_out_left);
            }
        });

    }


    @Override
    public void attachBaseContext(Context base) {
        MultiDex.install(base);
        super.attachBaseContext(base);
    }

    @Override
    public void onBackPressed() {
        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        if (drawer.isDrawerOpen(GravityCompat.START)) {
            drawer.closeDrawer(GravityCompat.START);
        } else {
            super.onBackPressed();
        }
        overridePendingTransition(R.anim.push_down_in, R.anim.push_down_out);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            Intent i = new Intent(this, NewsActivity.class);
            startActivity(i);
            return true;
        }

        return super.onOptionsItemSelected(item);
    }

    @SuppressWarnings("StatementWithEmptyBody")
    @Override
    public boolean onNavigationItemSelected(MenuItem item) {
        // Handle navigation view item clicks here.
        int id = item.getItemId();

        if (id == R.id.nav_us) {
            Intent i = new Intent(this, GenPrecautionsActivity.class);
            startActivity(i);
        } else if (id == R.id.nav_world) {
            //mwebView.loadUrl("http://www.newsweek.com/world");
        } else if (id == R.id.nav_tech) {
            //mwebView.loadUrl("http://www.newsweek.com/tech-science");
        } else if (id == R.id.nav_sports) {
            //mwebView.loadUrl("http://www.newsweek.com/sports");
        } else if (id == R.id.nav_share) {
            //mwebView.loadUrl("http://www.newsweek.com/about-newsweek");
        } else if (id == R.id.nav_send) {
            //mwebView.loadUrl("http://www.newsweek.com/contact");
        }

        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        drawer.closeDrawer(GravityCompat.START);
        return true;
    }

    public void checkEvent(String eventNumber) {
        if(eventNumber.equals("1")) {
            news_heading.setText(newsHeaderOne);
            news_description.setText(newsOne);
        }
        else if(eventNumber.equals("2")) {
            news_heading.setText(newsHeaderTwo);
            news_description.setText(newsTwo);
        }
        else if(eventNumber.equals("3")) {
            news_heading.setText(newsHeaderThree);
            news_description.setText(newsThree);
        }
    }
}
