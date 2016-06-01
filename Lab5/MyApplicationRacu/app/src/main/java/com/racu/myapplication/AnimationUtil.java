package com.racu.myapplication;

import android.animation.Animator;
import android.animation.AnimatorSet;
import android.animation.ObjectAnimator;
import android.animation.ValueAnimator;
import android.graphics.Point;
import android.view.View;
import android.view.animation.AccelerateDecelerateInterpolator;
import android.view.animation.AccelerateInterpolator;
import android.view.animation.BounceInterpolator;
import android.view.animation.OvershootInterpolator;

/**
 * Created by dsdmsa on 3/25/16.
 */
public class AnimationUtil {

    private AnimatorSet animSet = new AnimatorSet();
    private Animator yAnimation;
    private Animator xAnimation;
    private AnimatorSet animSetXY;
    private ObjectAnimator yAnim;
    private ObjectAnimator xAnim;
    private ValueAnimator valueAnimator;

    private AnimationUtil() {
    }

    private static AnimationUtil instance;

    public static AnimationUtil animate() {
        if (instance == null) {
            instance = new AnimationUtil();
        }
        return instance;
    }

    public void sliceY(View view, int y, int duration) {
        yAnimation = ObjectAnimator.ofFloat(
                view,
                "translationY",
                y);

        animSet.play(yAnimation);
        animSet.setInterpolator(new AccelerateDecelerateInterpolator());
        animSet.setDuration(duration);
        animSet.start();
    }

    public void toPoint(View view, Point point, Animator.AnimatorListener animatorListener) {
        xAnimation = ObjectAnimator.ofFloat(
                view,
                "translationX",
                point.x);
        yAnimation = ObjectAnimator.ofFloat(
                view,
                "translationY",
                point.y);
        animSet.playTogether(xAnimation, yAnimation);
        animSet.setInterpolator(new OvershootInterpolator());
        animSet.setDuration(200);
        animSet.start();
        if (animatorListener != null) {
            animSet.addListener(animatorListener);
        }
        instance = null;
    }

    public void scaleView(View view, float scaleFactor) {
        animSetXY = new AnimatorSet();
        xAnim = ObjectAnimator.ofFloat(view, "scaleX", scaleFactor);
        yAnim = ObjectAnimator.ofFloat(view, "scaleY", scaleFactor);
        xAnim.setDuration(3000);
        yAnim.setDuration(3000);
        animSetXY.play(xAnim).with(yAnim);
        animSetXY.setInterpolator(new BounceInterpolator());
        animSetXY.start();
    }


    public void visibilityAnimations(final View view, boolean isVisible) {
        if (isVisible) {
            valueAnimator = ValueAnimator.ofFloat(0.2f, 1f);
        } else {
            valueAnimator = ValueAnimator.ofFloat(1f, 0.2f);

        }
        valueAnimator.setDuration(300);
        valueAnimator.setInterpolator(new AccelerateInterpolator());
        valueAnimator.addUpdateListener(new ValueAnimator.AnimatorUpdateListener() {
            @Override
            public void onAnimationUpdate(ValueAnimator animation) {
                Float value = (Float) animation.getAnimatedValue();
                view.setAlpha(value);
            }
        });
        valueAnimator.start();
    }


    public void valueAnimate(final View view, float from, float to, int duration) {
        valueAnimator = ValueAnimator.ofFloat(from, to);
        valueAnimator.setDuration(duration);
        valueAnimator.setInterpolator(new AccelerateInterpolator());
        valueAnimator.addUpdateListener(new ValueAnimator.AnimatorUpdateListener() {
            @Override
            public void onAnimationUpdate(ValueAnimator animation) {
                Float value = (Float) animation.getAnimatedValue();
                view.setAlpha(value);
            }
        });
        valueAnimator.start();
    }
}